<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;

Route::get("/",[HomeController::class,"index"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

// Categories 
Route:: get("/categories", [CategoryController::class,"index"]);
Route:: get("/add-category", [CategoryController::class,"addcategory"]);
Route:: post("/insert-category", [CategoryController::class,"insertcategory"]);
Route:: get("/edit-category/{id}", [CategoryController::class,"editcategory"]);
Route:: put("/update-category/{id}", [CategoryController::class,"updatecategory"]);
Route:: get("/delete-category/{id}", [CategoryController::class,"deletecategory"]);

// products
Route:: get("/products", [ProductController ::class,"index"]);
Route:: get("/add-product", [ProductController::class,"addproduct"]);
Route:: post("/insert-product", [ProductController::class,"insertproduct"]);
Route:: get("/edit-product/{id}", [ProductController::class,"editproduct"]);
Route:: put("/update-product/{id}", [ProductController::class,"updateproduct"]);
Route:: get("/delete-product/{id}", [ProductController::class,"deleteproduct"]);

Route:: get("/water-bottles", [HomeController::class,"waterBottles"]);
Route:: get("/view-category/{slug}", [HomeController::class,"viewcategory"]); 
Route:: get("/category/{category_slug}/{product_slug}", [HomeController::class,"productview"]); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
