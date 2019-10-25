<?php

namespace App\Http\Middleware;

use Closure;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , String $role)
    {
      if(!$request->user() || !$request->user()->hasRole($role)){ //if the request doesnt have a user or if the user doesnt have the specified role = true = runs command
        return redirect()->route('home');
      }
        return $next($request);
    }
}
