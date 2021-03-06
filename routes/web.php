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
    return view('home');
})->name("home");

Route::get('/prodotti', function () {
    return view('prodotti');
})->name("prodotti");

Route::get('/news', function () {
    return view('news');
})->name("news");

Route::get('/prodotti/show/{id}', function ($id) {
    $data = config("products.$id");
      if($data == null) {
        abort(404);
    }
    return view('products', ["products" => $data, "id" => $id]);
})->name("show");
