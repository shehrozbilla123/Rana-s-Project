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

Route::get('/', 'FrontendController@index');
Route::get('/Contact-us', 'FrontendController@Contact');
Route::get('/shop', 'FrontendController@shop');
Route::get('/blog', 'FrontendController@blog');


Route::get('/PentCoat', 'FrontendController@PentCoat');
Route::get('/Belts', 'FrontendController@Belts');
Route::get('/Pents', 'FrontendController@Pents');
Route::get('/Shirts', 'FrontendController@Shirts');
Route::get('/DressShirt', 'FrontendController@DressShirt');
Route::get('/Cap', 'FrontendController@Cap');
Route::get('/Poster', 'FrontendController@Poster');


