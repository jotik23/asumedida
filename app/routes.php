<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'InicioController@index');


Route::resource('categories', 'CategoriesController');

Route::resource('providers', 'ProvidersController');

Route::resource('presentationtypes', 'PresentationtypesController');

Route::resource('products', 'ProductsController');