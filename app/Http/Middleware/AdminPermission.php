<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminPermission
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
        
        if ( !Auth::check() )
        {
            return redirect('admin/auth/login');
        }

        return $next($request);
    }
}
