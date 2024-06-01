<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Catalog;
use App\Models\Category;
use App\Models\Homesection;
use App\Models\SectionTab;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Agent\Agent;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
        $minutes = 180;
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $controll= Schema::hasTable('settings');
       if ($controll) {


        if (\SiteHelpers::ayar('maintenance_mode') == 1 && Auth::user()) {
            $sliders = cache()->remember('home_sliders_key', $minutes, function () {
                return Slider::all()->where('isActive', 1);
            });

            $section2 = cache()->remember('home_section2_key', $minutes, function () {
                return Homesection::all()->where('section', 1)->where('isActive')->first();
            });
            $section3 = cache()->remember('home_section3_key', $minutes, function () {
                return Homesection::all()->where('section', 2)->where('isActive')->first();
            });
            $section5 = cache()->remember('home_section5_key', $minutes, function () {
                return Homesection::all()->where('section', 4)->where('isActive')->first();
            });
            $tabs = cache()->remember('home_tabs_key', $minutes, function () {
                return SectionTab::all()->where('isActive')->take(4);
            });
            $categories = cache()->remember('home_categories_key', $minutes, function () {
                return Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
            });
            if(\SiteHelpers::ayar('site_theme') == 1) {
                return view('frontend.home', compact('sliders', 'tr', 'section2', 'section3', 'section5', 'tabs', 'categories'));
            } elseif(\SiteHelpers::ayar('site_theme') == 2){
            return view('porto.home', compact('sliders', 'tr','section2', 'section3', 'section5', 'tabs', 'categories'));
            }
        } elseif (\SiteHelpers::ayar('maintenance_mode') == 0)
        {
            $sliders = cache()->remember('home_sliders_key', $minutes, function () {
                return Slider::all()->where('isActive', 1);
            });

            $section2 = cache()->remember('home_section2_key', $minutes, function () {
                return Homesection::all()->where('section', 1)->where('isActive')->first();
            });
            $section3 = cache()->remember('home_section3_key', $minutes, function () {
                return Homesection::all()->where('section', 2)->where('isActive')->first();
            });
            $section5 = cache()->remember('home_section5_key', $minutes, function () {
                return Homesection::all()->where('section', 4)->where('isActive')->first();
            });
            $tabs = cache()->remember('home_tabs_key', $minutes, function () {
                return SectionTab::all()->where('isActive')->take(4);
            });
            $categories = cache()->remember('home_categories_key', $minutes, function () {
                return Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
            });
            if(\SiteHelpers::ayar('site_theme') == 1) {
                return view('frontend.home', compact('sliders', 'tr', 'section2', 'section3', 'section5', 'tabs', 'categories'));
            } elseif(\SiteHelpers::ayar('site_theme') == 2){
                return view('porto.home', compact('sliders', 'tr','section2', 'section3', 'section5', 'tabs', 'categories'));
            }
        } elseif (\SiteHelpers::ayar('maintenance_mode') == 1) {

            return view('maintenance.index',compact('tr'));
        }
       } else {
           return redirect('/install');
       }
    }

    public function catalog()
    {
        $minutes = 180;
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $about = cache()->remember('about_catalog_key', $minutes, function () {
            return About::all()->firstOrFail();
        });
        $catalog = cache()->remember('catalog_key', $minutes, function () {
            return Catalog::all()->where('isActive', 1);
        });
        if(\SiteHelpers::ayar('site_theme') == 1) {
            return view('frontend.catalog', compact('catalog', 'about', 'tr'));
        } elseif(\SiteHelpers::ayar('site_theme') == 2) {
            return view('porto.catalog', compact('catalog', 'about', 'tr'));
        }
    }
}
