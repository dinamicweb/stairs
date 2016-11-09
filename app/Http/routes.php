<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');

Route::get('about', 'PageController@about');

Route::get('contacts','MainController@contacts');

Route::get('feedback', 'MainController@feedback');

Route::get('calculation', 'CalculationController@calculation');

Route::get('online-calculation', 'CalculationController@onlineCalculation');

Route::get('catalog', 'CatalogController@catalog');