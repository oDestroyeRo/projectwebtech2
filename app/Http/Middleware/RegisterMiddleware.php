<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class RegisterMiddleware
{
  protected $auths;
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
      $user = \App\User::where('email', '=', Auth::user()->email)->first();

      if ($user->role == 'customer'){
            return redirect('changepassword');
      }
      return $next($request);
  }
}
