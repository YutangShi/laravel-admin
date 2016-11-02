<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        
       
        if(!empty(auth()->guard('admin')->id()))
        {
            $data=Admin::find(auth()->guard('admin')->id());
            if (!$data->id)
            {
                return redirect()->intended('admin/login/')->with('status', 'You do not have access to admin side');
            }
            return $next($request);
        }
        else 
        {
            return redirect()->intended('admin/login/')->with('status', 'Please Login to access admin area');
        }
        
         
    }
}
