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

Route::get('/index','PagesController@index_page');
Route::get('/', 'PagesController@index_page');

Route::get('/about', 'PagesController@about_page');

Route::get('/portfolio', 'PagesController@portfolio_page');
Route::get('/product', 'PagesController@product_page');
Route::get('/services', 'PagesController@services_page');
Route::post('/contactus', 'PagesController@contactus');


