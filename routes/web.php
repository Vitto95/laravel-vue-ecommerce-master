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



Auth::routes();

/* Rotte Admin per Prodotti */
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function(){
      Route::get('/home', 'HomeController@index');
      Route::resource('/products', 'ProductController');   
    });
    
Route::get('/', function () {
    return view('guest.home');
});

//Route::get('/home', 'HomeController@index')->name('home');

