<?php

namespace App\Actions\Fortify;

use App\Models\Mahasiswa;
use App\Models\Dosen;
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
            return (new CreateNewMahasiswa())->create($input);
        } elseif (isset($input['nip'])) {
            return (new CreateNewDosen())->create($input);
        }

        // Jika role tidak valid, kembalikan null atau lakukan penanganan error
        return null;
    }
}


?>