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
##Recipe CRUD
Route::get('recipes', 'RecipesController@index');
Route::get('recipes/{id}', 'RecipesController@read');
Route::post('recipes', 'RecipesController@create');
Route::put('recipes/{id}', 'RecipesController@update');
Route::delete('recipes/{id}', 'RecipesController@delete');
