<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class Language
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has("lang_code")) {
            App::setLocale(session()->get("lang_code"));
        }
        return $next($request);
    }
}
