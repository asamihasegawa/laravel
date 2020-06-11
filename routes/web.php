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

/*Route::get('/', function () {
|    return view('welcome');
|});
*/
Route::get('/', function(){
  return view('welcome');
});

Route::get('top','MainController@index');
Route::get('top/news','MainController@news');
Route::get('top/about','MainController@about');
Route::get('top/collection','MainController@collection');
Route::get('top/stockist','MainController@stockist');
Route::get('top/contact','MainController@contact');
Route::get('top/online','MainController@online');
Route::get('top/sitemap','MainController@sitemap');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
