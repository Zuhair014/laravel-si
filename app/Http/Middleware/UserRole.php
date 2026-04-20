<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect('/login');
        }

        if ($user->role === $role) {
            return $next($request);
        }

        if ($user->role === 'admin') {
            return redirect('/admin/home')->with('status', 'Tidak Punya Permission!');
        } elseif ($user->role === 'staff') {
            return redirect('/staff/home')->with('status', 'Tidak Punya Permission!');
        }

        return redirect('/');
    }
}