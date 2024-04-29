<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
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
    public function boot(Factory $cache, Setting $settings)
    {
        $cachedSettings = $cache->remember('settings', 60, function() use ($settings)
        {
            return $settings->pluck('settings_value', 'settings_key')->all();
        });
        config()->set('settings', $cachedSettings);
    }
}
