<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{
    public function index($locale = null)
    {
        $minutes = 180;
        $locale = $locale ?? 'en'; // Eğer locale parametresi yoksa varsayılan dil (en)

        // Dil koduna uygun şekilde veritabanından veri alma
        $about = Cache::remember("about_key_$locale", $minutes, function () use ($locale) {
            $about = About::firstOrFail();

            // Varsayılan dil değilse ilgili dildeki alanları ata
            if ($locale !== 'en') {
                $about->name = $about->getOriginal('name_' . $locale) ?? $about->getOriginal('name');
                $about->description = $about->getOriginal('description_' . $locale) ?? $about->getOriginal('description');
                $about->page_description = $about->getOriginal('page_description_' . $locale) ?? $about->getOriginal('page_description');
                $about->page_keywords = $about->getOriginal('page_keywords_' . $locale) ?? $about->getOriginal('page_keywords');
                $about->slug = $about->getOriginal('slug_' . $locale) ?? $about->getOriginal('slug');
            }

            return $about;
        });

        $certificate = Cache::remember("certificates_key_$locale", $minutes, function () use ($locale) {
            return Certificate::all()->map(function ($cert) use ($locale) {
                if ($locale !== 'en') {
                    $cert->name = $cert->{'name_' . $locale} ?? $cert->name;
                }
                return $cert; // Güncellenmiş öğeyi döndür
            });
        });


        // Tema seçimine göre uygun görünüme yönlendirme
        $siteTheme = \SiteHelpers::ayar('site_theme');

        if ($siteTheme == 1) {
            return view('frontend.about', compact('about', 'certificate'));
        } elseif ($siteTheme == 2) {
            return view('porto.about', compact('about', 'certificate'));
        }

        // Eğer tanımlı bir tema yoksa varsayılan olarak bir görünüm dönebilir
        return view('default.about', compact('about', 'certificate'));
    }
}
