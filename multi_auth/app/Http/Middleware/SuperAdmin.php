<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        
        $user=Auth::user();
        if($user->role==1){
            return $next($request);
        }
        if($user->role==2){
            return redirect('/Admin');
        }
        if($user->role==3){
            return redirect('/department_head');
        }
        if($user->role==4){
            return redirect('staff');
        }
        if($user->role==5){
            return redirect('client');
        }

        // If the user's role is not recognized, redirect them to the homepage
        return redirect('/login');
    }
}
