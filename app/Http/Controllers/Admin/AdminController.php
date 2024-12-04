<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function index()
    {
        if(Auth::check())
        {
            $user = Auth::User();
            Session::put('user', $user);
            $productCount = Product::all()->count();
            $categoryCount = Category::all()->count();
            $blogCount = Post::all()->count();
          //  return view('admin.home');
            return view('backend.home',compact('productCount','categoryCount','blogCount'));
        }
        return redirect('login')->with('error', 'Önce giriş yapmalısınız!');


    }



    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

}
