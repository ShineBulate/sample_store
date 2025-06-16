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

Route::get('/', function () {
    return view('/products');
});
Route::get('/products', 'App\Http\Controllers\Product\IndexController')->name('products.main');;
Route::get('/products/create', 'App\Http\Controllers\Product\CreateController')->name('products.create');
Route::post('/products/store', 'App\Http\Controllers\Product\StoreController')->name('products.store');;
Route::get('/products/{product}', 'App\Http\Controllers\Product\ShowController')->name('products.show');
Route::get('/products/{product}/edit', 'App\Http\Controllers\Product\EditController')->name('products.edit');
Route::post('/products/{product}', 'App\Http\Controllers\Product\UpdateController')->name('products.update');;
Route::get('/products/{product}', 'App\Http\Controllers\Product\DestroyController')->name('products.delete');


