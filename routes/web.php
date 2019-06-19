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

Route::get('register', function(){
    return view('register');
});

Route::get('shopping', "shoppingController@index");

Route::get('actor', "actorController@index");

Route::get('actor/register', "actorController@create");
Route::post('actor/register', "actorController@create");
Route::get('actor/edit/{id}', "actorController@edit");

Route::get('movie', "movieController@index");