<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ContactController extends Controller
{
    public function index()
    {

        if(\SiteHelpers::ayar('site_theme') == 1) {
            return view('frontend.contact');
        }elseif(\SiteHelpers::ayar('site_theme') == 2) {
            return view('porto.contact');
        }
    }
}
