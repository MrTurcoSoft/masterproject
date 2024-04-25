<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ContactController extends Controller
{
    public function index()
    {
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        return view('frontend.contact', compact('tr'));
    }
}
