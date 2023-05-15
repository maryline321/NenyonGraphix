<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get("/",[HomeController::class,"index"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route:: get("/categories", [CategoryController::class,"index"]);
Route:: get("/add-category", [CategoryController::class,"addcategory"]);
Route:: post("/insert-category", [CategoryController::class,"insertcategory"]);
Route:: get("/edit-product/{id}", [CategoryController::class,"editproduct"]);
Route:: put("/update-product/{id}", [CategoryController::class,"updateproduct"]);
Route:: get("/delete-product/{id}", [CategoryController::class,"deleteproduct"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
