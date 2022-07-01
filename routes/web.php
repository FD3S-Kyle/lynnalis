<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomepageController::class, 'execute'])->name('home');
Route::post('/', 'App\Http\Controllers\HomepageController@submitInquiry');

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'execute'])->name('products');

Route::get('/products/shampoo', function(){
    $prodName = "shampoo";
    return App::call('App\Http\Controllers\ProductsController@productView', ['prodName' => $prodName]);
})->name("shampoo");

Route::get('/products/oil', function(){
    $prodName = "oil";
    return App::call('App\Http\Controllers\ProductsController@productView', ['prodName' => $prodName]);
})->name("oil");

Route::get('/products/conditioner', function(){
    $prodName = "conditioner";
    return App::call('App\Http\Controllers\ProductsController@productView', ['prodName' => $prodName]);
})->name("conditioner");

Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'execute'])->name('aboutus');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'execute'])->name('admin');