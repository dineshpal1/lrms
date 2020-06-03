<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
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
        ///////////////////////////
       // print_r(Auth::user()->role)
       /*if(Auth::check() && Auth::user()->role->role_name=="admin")
        {
            
            return $next($request); 
        }
       
       return redirect()->route("userdashboard");*/
       ////////////////////////
        /*
       if(Auth::user()->role->role_name=="admin")
       {
        return redirect()->route("dashboard");
       }
       else if (Auth::user()->role->role_name=="fieldstaff")
       {
        return redirect()->route("userdashboard");
       }
       abort(404); 
       */
	   
	   
        if(Auth::check() && Auth::user()->role->id==1)
        {
            
           return $next($request); 
            //return redirect()->route("dashboard");
            
        }else if(Auth::check() && Auth::user()->role->id==2)
        {
          return redirect()->route("fieldstaffdashboard");
        }else if(Auth::check() && Auth::user()->role->id==3){
           return redirect()->route("assistantdashboard");
         }else if(Auth::check() && Auth::user()->role->id==4){

           return redirect()->route("managerdashboard");
         }
    }
}
