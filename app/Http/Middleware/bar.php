<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class bar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('welcome');
        }

        // definition the table 
        $user=Auth::user();
        // auth role check 
        if($user->role==3){
            return $next($request);
        }

        if($user->role==2){
            return redirect('/kitchen');
        }

        if($user->role==1){
            return redirect('/admin');
        }
        return $next($request);
    }
}
