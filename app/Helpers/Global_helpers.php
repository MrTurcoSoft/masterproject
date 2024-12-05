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

        // Rota için çevirileri al
        $translations = [
            'category' => [
                'en' => 'category',
                'fr' => 'categorie',
                'de' => 'kategorie',
                'it' => 'categoria',
                'hu' => 'kategoriak',
                'sr' => 'kategorija',
                'es' => 'categoria',
            ],
            'product' => [
                'en' => 'product',
                'fr' => 'produit',
                'de' => 'produkt',
                'it' => 'prodotto',
                'hu' => 'termek',
                'sr' => 'proizvod',
                'es' => 'producto',
            ],
            'about' => [
                'en' => 'about',
                'fr' => 'a-propos',
                'de' => 'uber-uns',
                'it' => 'chi-siamo',
                'hu' => 'rolunk',
                'sr' => 'o-nama',
                'es' => 'sobre-nosotros',
            ],
            'contact' => [
                'en' => 'contact',
                'fr' => 'contact',
                'de' => 'kontakt',
                'it' => 'contatto',
                'hu' => 'kapcsolat',
                'sr' => 'kontakt',
                'es' => 'contacto',
            ],
            'catalogue' => [
                'en' => 'catalogue',
                'fr' => 'catalogue',
                'de' => 'katalog',
                'it' => 'catalogo',
                'hu' => 'katalogus',
                'sr' => 'katalog',
                'es' => 'catalogo',
            ],
            'blog-posts' => [
                'en' => 'blog-posts',
                'fr' => 'articles',
                'de' => 'blog-artikel',
                'it' => 'articoli',
                'hu' => 'blog-bejegyzesek',
                'sr' => 'blog-objave',
                'es' => 'entradas-de-blog',
            ],
        ];

        // Parametreleri güncelle
        if (isset($parameters['category']) && isset($translations['category'][$locale])) {
            $parameters['category'] = $translations['category'][$locale];
        }

        if (isset($parameters['product']) && isset($translations['product'][$locale])) {
            $parameters['product'] = $translations['product'][$locale];
        }

        if (isset($parameters['about']) && isset($translations['about'][$locale])) {
            $parameters['about'] = $translations['about'][$locale];
        }
        if (isset($parameters['contact']) && isset($translations['contact'][$locale])) {
            $parameters['contact'] = $translations['contact'][$locale];
        }
        if (isset($parameters['catalogue']) && isset($translations['catalogue'][$locale])) {
            $parameters['catalogue'] = $translations['catalogue'][$locale];
        }
        if (isset($parameters['blog-posts']) && isset($translations['blog-posts'][$locale])) {
            $parameters['blog-posts'] = $translations['blog-posts'][$locale];
        }

        // Varsayılan dil (İngilizce) için dil kodu ekleme
        if ($locale === 'en') {
            return route($routeName, $parameters);
        }

        // Diğer diller için dil kodunu ekle
        $localizedRouteName = 'localized.' . $routeName;
        $parameters = array_merge(['locale' => $locale], $parameters);

        return route($localizedRouteName, $parameters);
    }
}




