<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
        //throw new HttpException(503);
        
         
        // if ( preg_match('/^s.*/',strtolower( 'gfdgdfgfd' )) ) {
        //    return redirect('/');
        // }

        $nb = $request->route('id');              // returns specific parameter
        //dd($request->route()->parameters());    // returns all parameters as an array

        if ( $nb > 10 ) {
            return redirect('/');
        }


        $param2 = $request->route('nb2');
        $param3 = $request->route('nb3');

        
        return $next($request);
    }
}
