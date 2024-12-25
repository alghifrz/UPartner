<?php

namespace App\Actions\Fortify;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewMahasiswa implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): Mahasiswa
    {
            Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'nim' => ['required', 'string', 'max:9', 'unique:mahasiswa,nim'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:4096'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $fileName = null;

        // Periksa apakah ada foto dan proses upload jika ada
        if (isset($input['photo']) && is_string($input['photo'])) {
            // Jika path foto ada, kita abaikan
            $fileName = null;
        } elseif (isset($input['photo']) && $input['photo']->isValid()) {
            // Jika file yang di-upload valid
            $file = $input['photo'];
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Menyimpan file ke storage (public/uploads)
            $file->storeAs('public/uploads', $fileName);
        }

        $mahasiswa = Mahasiswa::create([
            'name' => $input['name'],
            'nim' => $input['nim'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'photo' => $fileName,  // Menggunakan $fileName yang benar
        ]);
        session()->flash('success', 'Registrasi berhasil! Selamat datang.');
        return $mahasiswa;
    }
}
