<?php

namespace App\Http\Middleware;

use Closure;

class Admin_session
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
        $value = $request->session()->get('user');
        if($value==1){
            return $next($request);    
        }else{
            return redirect('/');
        }
    }
}