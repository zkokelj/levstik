<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class LanguageMiddleware
{

    protected $app;

    public function __construct(Application $app, Request $request)
    {
        if($locale = $request->header('locale')){
            if(in_array($locale, ['en', 'si', 'ch'])){
                $app->setLocale($locale);
            }
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }


}
