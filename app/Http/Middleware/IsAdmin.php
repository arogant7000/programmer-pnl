<?php

namespace App\Http\Middleware;

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
    public function handle($request, Closure $next)
    {
        if (auth()->check() && $request->user()->role == 'admin' || $request->user()->role == 'superadmin' ) {
          return $next($request);
        }
        $notification = array(
                 'message' => 'Anda tidak punya akses!',
                 'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }
}
