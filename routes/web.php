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
    return redirect('boissons');
});
// Boissons
Route::get('/boissons', 'BoissonsController@show');
Route::post('/boissons/add', 'BoissonsController@add');

Route::get('/boissons/edit/{boisson}','BoissonsController@editPage');
Route::post('/boissons/edit/{boisson}','BoissonsController@edit');

Route::get('/boissons/delete/{boisson}', 'BoissonsController@deletePage');
Route::delete('/boissons/delete/{id}', 'BoissonsController@delete');

Route::put('/boissons/idSort','BoissonsController@sortById');
Route::put('/boissons/nameSort','BoissonsController@sortByName');
Route::put('/boissons/priceSort','BoissonsController@sortByPrice');

// Recettes
Route::get('/recettes', 'RecettesController@index');
Route::get('/recettes/create','RecettesController@create');
Route::post('/recettes', 'RecettesController@store');

Route::get('/recettes/{boisson}','RecettesController@show');

//Ingredients

Route::get('/ingredients', 'IngredientsController@index');
Route::get('/ingredients/create', 'IngredientsController@create');
Route::post('/ingredients', 'IngredientsController@store');

Route::get('/ingredients/{ingredient}','IngredientsController@show');
Route::get('/ingredients/{ingredient}/edit', 'IngredientsController@edit');

Route::put('/ingredients/{ingredient}', 'IngredientsController@update');
Route::delete('/ingredients/{ingredient}', 'IngredientsController@destroy')->name('ingredients.destroy');
