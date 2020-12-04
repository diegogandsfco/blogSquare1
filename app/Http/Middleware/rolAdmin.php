<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Flash;


class rolAdmin
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
        $Admin = Config::get('constantes.RolAdministrador');
        
        $usuarioActual = Auth::user();
        if (!empty($usuarioActual)){
            
            if ($usuarioActual->admin!=$Admin ){
                Flash::error('No tiene los permisos suficientes para realizar la acción deseada');
                return redirect('sinPermiso');
            }
            
        }else{
            Flash::error('No tiene los permisos suficientes para realizar la acción deseada');
            return redirect('sinPermiso');
        }
        return $next($request);
    }
}
