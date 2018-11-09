<?php

namespace App\Http\Middleware;

use Closure;

class IfStartsWithS
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
         
        // if ( preg_match('/^s.*/',strtolower( 'gfdgdfgfd' )) ) {
        //    return redirect('/');
        // } 
        $nb = $request->route('id');            // returns specific parameter
        //dd($request->route()->parameters());    // returns all parameters as an array

        if ( $nb > 10 ) {
            return redirect('/');
        }

        return $next($request);
    }
}
