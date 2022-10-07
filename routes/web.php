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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/create', 'studentController@create');
Route::post('/submit', 'studentController@store');
Route::get('delete/{id}', 'studentController@destroy');
Route::get('edit/{id}', 'studentController@edit');
Route::post('update/{id}', 'studentController@update');
Route::get('view/{id}', 'studentController@view');


