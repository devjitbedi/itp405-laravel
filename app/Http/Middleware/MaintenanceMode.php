<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class MaintenanceMode
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

        $query = DB::table('configurations')
        ->where([
            ['name', 'like', '%maintenance%'], 
            ['value', 'like', '%on%']
        ])
        ->first();

        //Maintenance mode is on
        if($query != null) { 

            return redirect('/maintenance');

        } else {

          return $next($request);
          
        }

    }
}
