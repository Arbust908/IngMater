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
// Rutas ingles (?)
Route::get('/' . __('routes.home', [], 'en') , 'HomeController@index')->name('home');
Route::get('/' . __('routes.who', [], 'en') , 'HomeController@who')->name('who');
Route::get('/' . __('routes.portfolio', [], 'en') , 'HomeController@portfolio')->name('portfolio');
Route::get('/' . __('routes.inspects', [], 'en') , 'HomeController@inspects')->name('inspects');
Route::get('/' . __('routes.iyd', [], 'en') , 'HomeController@iyd')->name('iyd');
Route::get('/' . __('routes.contact', [], 'en'), 'HomeController@contact')->name('contact');
Route::get('/' . __('routes.cyc', [], 'en') , 'HomeController@cyc')->name('cyc');

Route::post('/lang/', 'HomeController@lang')->name('lang');
