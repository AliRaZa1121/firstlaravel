<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->age <= 18 && $request->age >= 80 ) {
            return redirect('backend.adminindex');
        }
        else{
            return("You are under Age");
        }
        return $next($request);
    }
}
