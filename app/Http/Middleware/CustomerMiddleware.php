<?php

namespace App\Http\Middleware;

use Closure;

class CustomerMiddleware
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $user = \App\User::where('email', '=', $this->auth->user()->email)->first();

      if ($user->role != 'customer'){
          return redirect('');
      }
      return $next($request);
    }
}
