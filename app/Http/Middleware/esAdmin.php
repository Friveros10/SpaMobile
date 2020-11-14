<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;


class esAdmin
{

     
    public function handle($request, Closure $next, $guard = null)
    {
      return redirect('/');
    }
}
