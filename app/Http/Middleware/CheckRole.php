<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Ubah daftar role menjadi Collection
        $rolesCollection = collect(explode('|', $role));

        // Cek apakah pengguna login dan memiliki role yang sesuai
        if (Auth::check() && $rolesCollection->contains(Auth::user()->role)) {
            return $next($request); // Lanjutkan request jika role cocok
        }

        // Jika tidak cocok, redirect ke halaman lain atau tampilkan pesan error
        return redirect('/')->withErrors('Anda tidak memiliki akses untuk halaman ini.');
    }
}
