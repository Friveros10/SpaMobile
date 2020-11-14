<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{

     
    public function handle($request, Closure $next, $guard = null)
    {
      return redirect('/');
    }
}
