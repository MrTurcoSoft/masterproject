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
            $about = About::firstOrFail(); // İlk kaydı getir, hata olursa 404 döner

            // Varsayılan dil değilse ilgili dildeki alanları ata
            if ($locale !== 'en') {
                $about->name = $about->{'name_' . $locale};
                $about->description = $about->{'description_' . $locale};
                $about->page_description = $about->{'page_description_' . $locale};
                $about->page_keywords = $about->{'page_keywords_' . $locale};
                $about->slug = $about->{'slug_' . $locale};
            }

            return $about;
        });

        $certificate = Cache::remember("certificates_key_$locale", $minutes, function () use ($locale) {
            $certificate = Certificate::all();
            // Koleksiyon üzerinde döngü yaparak her öğeyi güncelleyin
            foreach ($certificate as $cert) {
                if ($locale !== 'en') {
                    $certificate->name = $cert->{'name_' . $locale} ?? $certificate->name; // Eğer name_fr yoksa, varsayılan name'i kullan
                }
            }
            return $certificate;

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
