<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * 
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        foreach($user->roles as $role)
        {
        if ($role->name ==='admin') {
           
       
            return $next($request);
          } else{
            return redirect('login');
          }
        
        }
    }

}