<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class RegisterDosenController extends Controller
{
    public function showRegistrationForm()
    {
        // Ambil semua data prodi dari tabel prodi
        $prodis = Prodi::all();

        // Kirim data prodi ke view register
        return view('auth.registerDosen', compact('prodis'));
    }
}
