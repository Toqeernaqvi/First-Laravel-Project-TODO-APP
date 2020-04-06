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
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::post('/done','TodoController@store');
Route::get('/','TodoController@index');

Route::delete('/del/{id}','TodoController@destroy');
Route::get('/display/{id}','TodoController@edit');
Route::put('/up/{id}','TodoController@update');