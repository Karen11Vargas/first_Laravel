<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role = 'user'): Response
    {

        if($role == 'all'){

            //Enviar parametros al controlador
            $request->merge([
                'role'=>$role
            ]);

            return $next($request);
        }
            

        $auxRole = 1;

        $idRole = ($role == 'user')?1:2;
        $user = Auth::user();

        $roleOfTheUser = 2;

        if ($roleOfTheUser == $idRole) {
            $request->merge([
                'role'=>$role
            ]);
            return $next($request);
        }
        return Response("No puede acceder");
    }
}
