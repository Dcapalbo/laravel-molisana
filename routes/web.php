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

Route::get('/home', function () {
  $data = config('products');
    return view('home');
})->name("home");

Route::get('/prodotti', function () {
    return view('prodotti');
})->name("prodotti");

Route::get('/product/show/{id}', function ($id) {
    return view('product');
})->name("product");

Route::get('/news', function () {
    return view('news');
})->name("news");
