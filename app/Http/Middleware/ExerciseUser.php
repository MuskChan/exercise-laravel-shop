<?php

namespace App\Http\Middleware;

use Closure;

class ExerciseUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request){
            setcookie('user',$request->ip());
//            dd($request->cookie());
        }
        return $next($request);
    }
}
