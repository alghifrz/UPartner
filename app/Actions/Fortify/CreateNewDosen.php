<?php

namespace App\Actions\Fortify;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewDosen implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): Dosen
    {
            Validator::make($input, [
            'nip' => ['required', 'string', 'max:6', 'unique:Dosen,nip'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'prodi_id' => ['required', 'integer', 'exists:prodi,id'],
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

        $Dosen = Dosen::create([
            'nip' => $input['nip'],
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'email_verified_at' => now(),
            'prodi_id' => $input['prodi_id'],
            'photo' => $fileName,  // Menggunakan $fileName yang benar
        ]);
        session()->flash('success', 'Registrasi berhasil! Selamat datang.');
        return $Dosen;
    }
}
