<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // se esta autenticado e logado como admin
        if (Auth::guard($guard)->check()) {
            if($guard == 'admin')
            {       
                return redirect()->route('admin.dashboard');
            }
            
        // caso não esteja logado como admin retorna a view home do usuário
            return redirect('/home');
        }

        return $next($request);
    }
}
