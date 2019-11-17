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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/' . __('routes.home') , 'HomeController@index')->name('home');
Route::get('/' . __('routes.who') , 'HomeController@who')->name('who');
Route::get('/' . __('routes.portfolio') , 'HomeController@portfolio')->name('portfolio');
Route::get('/' . __('routes.inspects') , 'HomeController@inspects')->name('inspects');
Route::get('/' . __('routes.iyd') , 'HomeController@iyd')->name('iyd');
Route::get('/' . __('routes.contact'), 'HomeController@contact')->name('contact');
Route::get('/' . __('routes.cyc') , 'HomeController@cyc')->name('cyc');
