<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.home");
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
