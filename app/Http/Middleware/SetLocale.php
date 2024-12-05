<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
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
        // URL'deki dil kodunu al
        $locale = $request->segment(1);

        // Eğer dil kodu destekleniyorsa ayarla, yoksa varsayılanı kullan
        if (in_array($locale, ['fr', 'de', 'it', 'hu', 'sr', 'es'])) {
            App::setLocale($locale);
        } else {
            App::setLocale('en'); // Varsayılan dil
        }

        return $next($request);
    }
}
