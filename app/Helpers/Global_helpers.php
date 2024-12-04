<?php

use Illuminate\Support\Facades\File;

if (!function_exists('___')) {
    function ___($key)
    {
        // Geçerli dil ve varsayılan dil tanımlaması
        $locale = app()->getLocale();
        $defaultLocale = 'en';

        // Dil dosyasının yolu (örneğin resources/lang/fr/messages.php)
        $langDirPath = resource_path("lang/{$locale}");
        $langFilePath = "{$langDirPath}/messages.php";
        $defaultLangFilePath = resource_path("lang/{$defaultLocale}/messages.php");

        // Eğer dil klasörü yoksa, yeni bir klasör oluştur
        if (!File::exists($langDirPath)) {
            File::makeDirectory($langDirPath, 0755, true);
        }

        // Eğer dil dosyası yoksa, yeni bir dil dosyası oluştur
        if (!File::exists($langFilePath)) {
            File::put($langFilePath, "<?php\n\nreturn [\n];");
        }

        // Eğer varsayılan dil dosyası yoksa, yeni bir dil dosyası oluştur
        if (!File::exists($defaultLangFilePath)) {
            File::put($defaultLangFilePath, "<?php\n\nreturn [\n];");
        }

        // Dil dosyasını dizi olarak yükle
        $translations = include($langFilePath);
        $defaultTranslations = include($defaultLangFilePath);

        // Eğer çeviri dosyasında anahtar bulunmuyorsa, hem varsayılan hem de mevcut dile ekle
        if (!array_key_exists($key, $defaultTranslations)) {
            $defaultTranslations[$key] = $key;
            $exportedDefaultTranslations = var_export($defaultTranslations, true);
            File::put($defaultLangFilePath, "<?php\n\nreturn {$exportedDefaultTranslations};");
        }

        if (!array_key_exists($key, $translations)) {
            $translations[$key] = $key;
            $exportedTranslations = var_export($translations, true);
            File::put($langFilePath, "<?php\n\nreturn {$exportedTranslations};");
        }

        // Anahtarın çevirisini döndür
        return __('messages.' . $key);
    }
}

//Ürün adresi basitleştirme
if (!function_exists('getProductUrl')) {
    function getProductUrl($product)
    {
        if (app()->getLocale() !== 'en') {
            return route('product', ['locale' => app()->getLocale(), 'slug' => $product->slug]);
        }
        return route('product', ['slug' => $product->slug]);
    }
}

if (!function_exists('getLocalizedUrl')) {
    function getLocalizedUrl($routeName, $parameters = [])
    {
        $locale = app()->getLocale();

        // Eğer varsayılan dil (en) ise, locale eklemeden rota oluştur
        if ($locale === 'en') {
            if (\Illuminate\Support\Facades\Route::has($routeName)) {
                return route($routeName, $parameters);
            }
            throw new Exception("Route [$routeName] not defined.");
        }

        // Diğer diller için locale parametresini ekle
        $localizedRouteName = 'localized.' . $routeName;

        if (\Illuminate\Support\Facades\Route::has($localizedRouteName)) {
            $parameters = array_merge(['locale' => $locale], $parameters);
            return route($localizedRouteName, $parameters);
        }

        throw new Exception("Route [$localizedRouteName] not defined.");
    }
}





