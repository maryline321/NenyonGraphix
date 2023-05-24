<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $featured_products= Product::where('trending', '1')->take(15)->get();
        return view("frontend.home", compact('featured_products'));
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
