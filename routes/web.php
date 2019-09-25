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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/characters', 'CharactersController@index');
Route::get('/characters/{slug}', 'CharactersController@show');
Route::post('/catch', 'UserController@catchAction');
Route::get('/users','UserController@index');
Route::get('/users/{id}','UserController@show');
Route::post('/battle', 'CharactersController@battleAction');

