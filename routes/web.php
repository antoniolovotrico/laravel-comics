<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'PageController@home')->name('home');
//  Route Resource Controller
Route::resource('guest/comics', 'ComicController');

Auth::routes();


Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('comics', 'ComicController');
    Route::resource('collections', 'CollectionController');
});