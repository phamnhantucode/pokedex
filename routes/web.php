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

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/info', function () {
    return view('pokedex');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/login',function(){
    return view ('login');
});
Route::get('/shop',function(){
    return view ('shop');
});
Route::prefix('admin')->group(function () {
    Route::get('/', function () {return view('admin');});
});

<<<<<<< HEAD
route::get('/', [App\Http\Controllers\LoginController::class, 'getLogin']);
route::post('/', [App\Http\Controllers\LoginController::class, 'postLogin']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('ten-san-pham-slug', function () {
    return view('detail_product');
});
>>>>>>> a536c64ce77ff54dfab59d4f55e74a3fbd119b7f
