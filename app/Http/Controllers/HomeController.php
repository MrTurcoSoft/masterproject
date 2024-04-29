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
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $controll= Schema::hasTable('settings');
       if ($controll) {


        if (\SiteHelpers::ayar('maintenance_mode') == 1 && Auth::user()) {
            $sliders = Slider::all()->where('isActive', 1);
            $section2 = Homesection::all()->where('section', 1)->where('isActive')->first();
            $section3 = Homesection::all()->where('section', 2)->where('isActive')->first();
            $section5 = Homesection::all()->where('section', 4)->where('isActive')->first();
            $tabs = SectionTab::all()->where('isActive')->take(4);
            $categories = Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
            return view('frontend.home', compact('sliders', 'tr','section2', 'section3', 'section5', 'tabs', 'categories'));

        } elseif (\SiteHelpers::ayar('maintenance_mode') == 0)
        {
            $sliders = Slider::all()->where('isActive', 1);
            $section2 = Homesection::all()->where('section', 1)->where('isActive')->first();
            $section3 = Homesection::all()->where('section', 2)->where('isActive')->first();
            $section5 = Homesection::all()->where('section', 4)->where('isActive')->first();
            $tabs = SectionTab::all()->where('isActive')->take(4);
            $categories = Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
            return view('frontend.home', compact('sliders', 'tr','section2', 'section3', 'section5', 'tabs', 'categories'));

        } elseif (\SiteHelpers::ayar('maintenance_mode') == 1) {

            return view('maintenance.index',compact('tr'));
        }
       } else {
           return redirect('/install');
       }
    }

    public function catalog()
    {
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $about = About::all()->firstOrFail();
        $catalog = Catalog::all()->where('isActive', 1);
        return view('frontend.catalog', compact('catalog', 'about','tr'));
    }
}
