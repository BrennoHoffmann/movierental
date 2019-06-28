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

Route::get('actor', "actorController@index")->middleware('checkadmin');

Route::get('actor/register', "actorController@create");
Route::post('actor/register', "actorController@create");
Route::get('actor/edit/{id}', "actorController@edit");
Route::post('actor/edit/{id}', "actorController@edit");

Route::get('movie', "movieController@index");

Route::get('movie/edit/{id}', "movieController@edit");
Route::post('movie/edit/{id}', "movieController@edit");
Route::get('movie/delete/{id}', "movieController@delete");
Route::post('movie/delete/{id}', "movieController@delete");

Route::get('client/register', "clientController@create");
Route::post('client/register', "clientController@create");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
