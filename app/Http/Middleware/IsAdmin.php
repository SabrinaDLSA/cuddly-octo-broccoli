<?php

namespace series\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Redirect;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function __construct(Guard $auth)
     {
          $this->auth = $auth;
     }

    public function handle($request, Closure $next)
    {
        if( $this->auth->user()->rol != 'admin' )
        {
          return Redirect::to('home');
        }
        return $next($request);
    }
}
