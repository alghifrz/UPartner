<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Fortify\RegisterAkun;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationFormMahasiswa()
    {
        $prodis = Prodi::all();
        return view('auth.register', compact('prodis'));
    }
    public function showLoginFormMahasiswa()
    {
        return view('auth.login');
    }

    public function showRegistrationFormDosen()
    {
        $prodis = Prodi::all();
        return view('auth.registerDosen', compact('prodis'));
    }
    public function showLoginFormDosen()
    {
        return view('auth.loginDosen'); 
    }

    public function registerCustomMahasiswa(Request $request)
    {
        $user = app(RegisterAkun::class)->create($request->all());
        Auth::login($user);
        session()->flash('user', $user);
        return redirect()->route('dashboard-mahasiswa');
    }

    public function registerCustomDosen(Request $request)
    {    
        $user = app(RegisterAkun::class)->create($request->all());
        Auth::login($user);
        session()->flash('user', $user);
        return redirect()->route('dashboard-dosen');
    }

    // Method untuk login sebagai Mahasiswa
    public function loginCustomMahasiswa(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = Mahasiswa::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->flash('user', $user);
            return redirect()->route('dashboard-mahasiswa');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    } 

    // Method untuk login sebagai Dosen
    public function loginCustomDosen(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = Dosen::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->flash('user', $user);
            return redirect()->route('dashboard-dosen');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }
}
