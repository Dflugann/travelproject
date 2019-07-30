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

Route::get('/', ['as'=> 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/contact', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
Route::get('/hotels', ['as' => 'site.hotels', 'uses' => 'Site\HotelsController@index']);
Route::get('/tours', ['as' => 'site.tours', 'uses' => 'Site\ToursController@index']);
Route::resource('services', 'Site\ServicesController');
Route::resource('about', 'Site\AboutController');
Route::resource('blog', 'Site\BlogController');
Route::resource('menus', 'MenuController');
