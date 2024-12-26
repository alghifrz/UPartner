<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAuthenticatedDosen
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user')) {
    
            return redirect()->route('loginDosen')->withErrors(['message' => 'Anda harus login terlebih dahulu']);
        }

        return $next($request);
    }
}
