<?php

namespace App\Http\Middleware;

use Closure;

class AuthBasicMiddleware
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
        if($request->getUser() == env('AUTH_BASIC_USER_NAME','api') && $request->getPassword() == env('AUTH_BASIC_PASSWORD','nvqhnl1997')){
            return $next($request);
        }else{
            return response(['success' => false,'message' => 'Basic Authenticate fail']);
        }
        
    }
}
