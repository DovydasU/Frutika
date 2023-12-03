<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/', [HomeController::class, "index"])->name('index');
// Route::get('/',function(){
//     return view('index');
// })->name('index');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Route::get('/404',function(){
    return view('404');
})->name('404');

Route::get('/checkout',function(){
    return view('checkout');
})->name('checkout');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/checkout',function(){
    return view('checkout');
})->name('checkout');

Route::get('/news',function(){
    return view('news');
})->name('news');

Route::get('shop', [ProductController::class, 'shop'])->name('shop');
// Route::get('/shop',function(){
//     return view('shop');
// })->name('shop');

Route::get('/single-news',function(){
    return view('single-news');
})->name('single-news');

Route::get('/single-product',function(){
    return view('single-product');
})->name('single-product');

Route::middleware('auth')->group(function () {
    //
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
