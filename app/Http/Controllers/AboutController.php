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
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $about = About::all()->firstOrFail();
        $cert = Certificate::all();
        return view('frontend.about', compact('about', 'cert','tr'));
    }
}
