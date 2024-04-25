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
        $tr = new GoogleTranslate();
        $tr->setSource('en');
        $cat = Category::all()->where('slug', $slug)->first();
        $products = $cat->urunler;
        return view("frontend.category", compact('cat', 'products','tr'));

    }
}
