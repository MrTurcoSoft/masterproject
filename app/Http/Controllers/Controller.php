<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {


        $categories = Category::all()->where('isActive')->where('ust_id','=',null)->sortBy('must');
        View::share('_categories', $categories);

        $sub_categories = Category::all()->where('isActive')->where('ust_id','!=',null)->sortBy('must');
        View::share('_sub_categories', $sub_categories);



        if(Auth::check())
        {
            $user = Auth::User();
            Session::put('user', $user);
            return back();
        } else {

            return redirect('login')->with('error', 'Önce giriş yapmalısınız!');
        }


    }
}
