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
    return redirect('/recipes');
});
##Admins
Route::get('users', 'UserController@index');
Route::get('users/register', function(){
    return view('user.register');
});
Route::post('users/register', 'UserController@create');
Route::get('users/{id}', 'UserController@read');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');

##Recipe CRUD
Route::get('recipes', 'RecipesController@index');
Route::get('recipes/{id}', 'RecipesController@read');
Route::post('recipes', 'RecipesController@create');
Route::put('recipes/{id}', 'RecipesController@update');
Route::delete('recipes/{id}', 'RecipesController@delete');
