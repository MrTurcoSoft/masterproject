<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
        $products = $cat->urunler;
        return view("frontend.category", compact('cat', 'products'));

    }
}
