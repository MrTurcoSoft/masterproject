<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ProductController extends Controller
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
        $product = Product::all()->where('slug', $slug)->firstOrFail();
        $category = $product->kategoriler()->distinct()->firstOrFail();
        $relateProducts = $category->urunler;
        return view("frontend.product",compact('product','tr','category','relateProducts'));
    }
}
