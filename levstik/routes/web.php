<?php

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

use App\Http\Controllers\WinnersController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/nagrajenci', 'WinnersController');

/*
Route::get('/nagrajenci', 'WinnersController@index');
Route::get('/nagrajenci/create', 'WinnersController@create');
Route::get('nagrajenci/{winner}', 'WinnersController@show');
Route::post('/nagrajenci', 'WinnersController@store');
Route::get('/nagrajenci/{winner}/edit', 'WinnersController@edit');
Route::patch('/nagrajenci/{winner}', 'WinnersController@update');
Route::delete('/nagrajenci/{winner}', 'WinnersController@destory');
*/


