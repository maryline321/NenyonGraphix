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

    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $category= Category::where('slug', $slug)->first();
            $products= Product::where('category_id', $category->id)->where('status','1')->get();
            return view('frontend.products.index',compact('category', 'products'));
        }
        else{
            return redirect('/')->with('status', "Slug does not exists");
        }
    }

    public function productview($category_slug,$product_slug)
    {
       if(Category::where('slug', $category_slug)->exists())
       {
        if(Product::where('slug', $product_slug)->exists())
        {   
            $products= Product::where('slug', $product_slug)->first();
            return view('frontend.products.view',compact('products'));
        }
        else{

            return redirect('/')->with('status', "The link is broken");
        }
       }
       else{

        return redirect('/')->with('status', "No Category found");
    }
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
