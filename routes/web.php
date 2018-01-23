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

Route::get('boissons', 'BoissonsController@show');
Route::post('boissons/add', 'BoissonsController@add');

Route::get('boissons/edit/{id}','BoissonsController@editPage');
Route::post('boissons/edit/{id}','BoissonsController@edit');

Route::get('boissons/delete/{id}', 'BoissonsController@deletePage');
Route::delete('boissons/delete/{id}', 'BoissonsController@delete');

Route::put('boissons/idSort','BoissonsController@sortById');
Route::put('boissons/nameSort','BoissonsController@sortByName');
Route::put('boissons/priceSort','BoissonsController@sortByPrice');
