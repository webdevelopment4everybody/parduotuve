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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin/products'], function(){
    Route::get('', 'ProductController@index')->name('product.index');
    Route::get('create', 'ProductController@create')->name('product.create');
    Route::post('store', 'ProductController@store')->name('product.store');
    Route::get('edit/{product}', 'ProductController@edit')->name('product.edit');
    Route::post('update/{product}', 'ProductController@update')->name('product.update');
    Route::post('/delete/{product}', 'ProductController@destroy')->name('product.destroy');
    Route::get('show/{product}', 'ProductController@show')->name('product.show');
 });

 Route::get('/', 'FrontController@home')->name('front.home');
 Route::post('add', 'FrontController@add')->name('front.add');
 Route::post('remove', 'FrontController@remove')->name('front.remove');

 Route::post('add-js', 'FrontController@addJs')->name('front.add-js');
 Route::post('buy', 'FrontController@buy')->name('buy');

 Route::get('all-good', 'FrontController@allGood')->name('all.good');
 Route::get('paysera/accept', 'FrontController@payseraAccept')->name('paysera.accept');
 Route::get('paysera/cancel', 'FrontController@payseraCancel')->name('paysera.cancel');
 
 Route::post('paysera/callback', 'FrontController@payseraCallback')->name('paysera.callback');

 Route::get('login_register', 'FrontController@login_register')->name('front.login_register'); 