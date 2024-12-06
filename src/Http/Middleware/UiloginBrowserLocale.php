<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class UiloginBrowserLocale
{
 
    public function handle(Request $request, Closure $next): Response
    {
        
      
        $browserLand=$request->header('accept-language');
        $browserLand=explode(',', $browserLand);
        $uiloginLocale= $browserLand[0]??'en' ;

        App::setlocale( $uiloginLocale);
        return $next($request);
    }
}
