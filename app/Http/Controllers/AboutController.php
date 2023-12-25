<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all()->firstOrFail();
        $cert = Certificate::all();
        return view('frontend.about', compact('about', 'cert'));
    }
}
