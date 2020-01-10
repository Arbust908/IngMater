<?php

namespace App\Http\Middleware;

use Closure;

class Localization
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
        // dump('Before');
        // dump('Session ' . \Session::get('locale'));
        // dump('App ' . \App::getLocale());
        // dump('Middle');
        $path = $request->path();

        if($path !== "lang") {
            $lang = in_array($path, __('routes', [], 'es') )
                ? 'es'
                : 'en';
        } else {
            $lang = \Session::get('locale') === 'es'
                ? 'en'
                : 'es';
        }
        \Session::put('locale', $lang);
        if(\Session::has('locale'))
        {
            \App::setlocale(\Session::get('locale'));
        }
        // dump('After');
        // dump('Session ' . \Session::get('locale'));
        // dump('App ' . \App::getLocale());
        // dump('Middle');
        return $next($request);
    }
}
