<?php

namespace App\Http\Middleware;

use Closure;

class Agecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( $request, Closure $next)
    {
       // echo "<p>This message from middleware</p>";
       if($request->age && $request->age<18){
         return redirect('restrict');
       }
        return $next($request);
    }
}

