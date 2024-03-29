<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/login", \App\Livewire\Auth\Login::class)->name("login")->middleware('guest');
Route::get("/register", \App\Livewire\Auth\Register::class)->name("register")->middleware('guest');

Route::middleware('auth')->group(function (){
    Route::get("/", \App\Livewire\Home::class)->name("home");
    Route::get("/about", \App\Livewire\About::class)->name("about");
    Route::get("/contact", \App\Livewire\Contact::class)->name("contact");
    Route::get("posts", \App\Livewire\Posts\Index::class)->name("posts.index");
    Route::get("posts/form-create", \App\Livewire\Posts\Create::class)->name("posts.create");

    Route::get("users", \App\Livewire\Users\Index::class)->name("users.index");

    Route::get("product", \App\Livewire\Product\Index::class)->name("product.index");
    Route::get("category-product", \App\Livewire\CategoryProduct\Index::class)->name("catproduct.index");

    Route::post("logout", \App\Http\Controllers\LogoutController::class)->name("logout");
});
