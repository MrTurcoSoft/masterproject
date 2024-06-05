<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function index($slug)
    {


        $cat = Category::all()->where('slug', $slug)->first();
        if ($cat->ust_id != null ) {
            $mainCat=Category::all()->where('id',$cat->ust_id)->firstorFail();
        } else {
            $mainCat=null;
        }

        $products = $cat->urunler;

        if(\SiteHelpers::ayar('site_theme') == 1) {
            return view("frontend.category", compact('cat', 'products', 'mainCat'));
        } elseif(\SiteHelpers::ayar('site_theme') == 2) {
            return view("porto.category", compact('cat', 'products', 'mainCat'));
        }

    }
}
