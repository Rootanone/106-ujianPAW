<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', 'ProductController@index')->name('index');
Route::get('/create', 'ProductController@create')->name('create');
Route::post('store/', 'ProductController@store')->name('store');
Route::get('show/{product}', 'ProductController@show')->name('show');
Route::get('edit/{product}', 'ProductController@edit')->name('edit');
Route::put('edit/{product}','ProductController@update')->name('update');
Route::delete('/{product}','ProductController@destroy')->name('destroy');