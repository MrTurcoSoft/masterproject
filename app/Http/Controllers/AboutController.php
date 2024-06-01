<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AboutController extends Controller
{
    public function index()
    {
        $minutes = 180;
        $tr = new GoogleTranslate();

        $tr->setSource('en');
        $about = cache()->remember('about_key', $minutes, function () {
            return About::all()->firstOrFail();
        });
        $cert = cache()->remember('certificates_key', $minutes, function () {
            return Certificate::all();
        });
        if(\SiteHelpers::ayar('site_theme') == 1) {
            return view('frontend.about', compact('about', 'cert','tr'));
        } elseif(\SiteHelpers::ayar('site_theme') == 2) {
        return view('porto.about', compact('about', 'cert','tr'));
        }
    }
}
