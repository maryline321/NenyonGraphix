<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $featured_products= Product::where('trending', '1')->take(15)->get();
        $trending_category= Category::where('popular', '1')->take(15)->get();
        return view("frontend.home", compact('featured_products','trending_category'));
    }

    public function waterBottles()
    {
        $category= Category::where('status', '0')->take(15)->get();
        return view("frontend.category", compact('category'));
    }

    public function redirects()
    {
        $role_as=Auth::user()->role_as;
        if($role_as=='1')
        {
            return view('admin.adminhome');
        }

        else{
            return view('home');
        }
    }
}
