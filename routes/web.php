<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [\App\Http\Controllers\ArticleController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('blog.show');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function(){
    Auth::logout();
    return redirect('/login');
});

Route::get('/products/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
