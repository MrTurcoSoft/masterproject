<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Homesection;
use App\Models\SectionTab;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all()->where('isActive', 1);
        $section2 = Homesection::all()->where('section', 1)->where('isActive')->first();
        $section3 = Homesection::all()->where('section', 2)->where('isActive')->first();
        $section5 = Homesection::all()->where('section', 4)->where('isActive')->first();
        $tabs = SectionTab::all()->where('isActive')->take(4);
        $categories = Category::all()->where('isActive')->sortBy('must');
        return view('frontend.home', compact('sliders', 'section2', 'section3', 'section5', 'tabs', 'categories'));
    }
}
