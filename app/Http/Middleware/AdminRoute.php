<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Session;

class AdminRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if(Session::has('loggedInUser')){
            $user = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
            if(!$user->role == 2){
                return redirect('/');
            }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
         ->header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');;
        }else{
            return redirect('/');
        }
    }
}
