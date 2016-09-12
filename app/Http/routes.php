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

Route::get('/', 'HomeController@index');

Route::get('shop','ShopController@index');
Route::get('shop/AddProduct','ShopController@add');
Route::post('submit-product','ShopController@submit');

Route::get('Aboutus','AboutusController@index');

Route::get('Contact','ContactController@index');