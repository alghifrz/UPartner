<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        // Ambil semua data prodi dari tabel prodi
        $prodis = Prodi::all();

        // Kirim data prodi ke view register
        return view('auth.register', compact('prodis'));
    }
}
