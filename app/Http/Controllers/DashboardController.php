<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboardMahasiswa(Request $request)
    {
        $user = $request->session()->get('user');
        
        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'Silakan login untuk mengakses halaman ini']);
        }

        return view('dashboard-mahasiswa', compact('user'));
    }

    public function showDashboardDosen(Request $request)
    {
        $user = $request->session()->get('user');
        
        if (!$user) {
            return redirect()->route('login')->withErrors(['message' => 'Silakan login untuk mengakses halaman ini']);
        }

        return view('dashboard-dosen', compact('user'));
    }
}
