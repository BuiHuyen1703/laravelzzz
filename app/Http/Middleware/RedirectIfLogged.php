<?php

namespace App\Http\Middleware;

use App\Models\Admin as ModelsAdmin;
use App\Models\Employee;
use Closure;
use Illuminate\Http\Request;

class RedirectIfLogged
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
        if (session('user')) {
            // dd(session('user')); 
            if (session('user') instanceof ModelsAdmin) {
                // dd('ok');
                return redirect()->route('dashboard');
            }

            if (session('user') instanceof Employee) {
                // cái này khi nào có trang của user thì bà điền vào nhé
            }
        }
        return $next($request);
    }
}
