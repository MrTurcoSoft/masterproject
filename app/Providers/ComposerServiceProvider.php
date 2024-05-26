<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            // Performans optimizasyonu için cache kullanımı
            $categories = cache()->remember('categories_cache_key', 180, function () {
                return $categories = Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
            });
            // Veriyi view ile paylaşıyoruz
            $view->with('_categories', $categories);
        });
        View::composer('*', function ($view) {
            // Performans optimizasyonu için cache kullanımı
            $sub_categories = cache()->remember('sub_categories_cache_key', 180, function () {
                return  $sub_categories = Category::all()->where('isActive')->where('ust_id','!=',null)->sortBy('must');
            });
            // Veriyi view ile paylaşıyoruz
            $view->with('_sub_categories', $sub_categories);
        });
    }
}
