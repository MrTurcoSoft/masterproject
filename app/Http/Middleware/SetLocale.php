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
        $locale = $request->segment(1); // URL'nin ilk segmentini alıyoruz, örneğin: /en

        if (in_array($locale, ['en', 'de', 'fr', 'sr', 'it', 'hu', 'es'])) {
            App::setLocale($locale); // Eğer desteklenen dillerden biriyse uygulamanın dilini ayarla
        } else {
            $locale = config('app.locale'); // Desteklenmiyorsa varsayılan dile geç
            return redirect("$locale" . $request->getPathInfo());
        }

        return $next($request);
    }
}
