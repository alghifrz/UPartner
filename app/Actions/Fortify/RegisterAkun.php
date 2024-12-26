<?php

namespace App\Actions\Fortify;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class RegisterAkun implements CreatesNewUsers
{
    /**
     * Create a new user instance based on role.
     *
     * @param  array  $input
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $input)
    {
        // Tentukan role dan buat pengguna sesuai role
        if (isset($input['nim'])) {
            $user = (new CreateNewMahasiswa())->create($input);
        } elseif (isset($input['nip'])) {
            $user = (new CreateNewDosen())->create($input);
        } else {
            throw new \Exception('Invalid registration input');
        }
        
        Auth::login($user);

        return $user;
    }
}


?>