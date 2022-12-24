<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Masyarakat as Middleware;

class Masyarakat extends Middleware
{ 
   protected function redirectTo($request)
   {
    if(Auth::user()->is_admin == true){
        return redirect()->route('home');
    }
    return $next($request);
   }
}