<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie que l'utilisateur est connecté ET que son rôle est 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // Sinon, on refuse l'accès
        abort(403, 'Accès refusé : vous devez être administrateur.');
    }
}
