<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('lang')) {
            // URL'de lang parametresi varsa bunu kullan
            $locale = $request->get('lang');
        } else {
            // Tarayıcı dilini al
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        }

        // Eğer desteklenen diller arasındaysa locale'yi ayarla
        if (array_key_exists($locale, Config::get('app.locales'))) {
            App::setLocale($locale);
        } else {
            // Desteklenmeyen dilse varsayılan dile ayarla
            App::setLocale(Config::get('app.fallback_locale'));
        }

        return $next($request);
    }
}
