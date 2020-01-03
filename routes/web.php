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
Auth::routes();
foreach( ['es', 'en'] as $lang ){
    Route::get('/' . __('routes.home', [], $lang) , 'HomeController@index')->name('home');
    Route::get('/' . __('routes.who', [], $lang) , 'HomeController@who')->name('who');
    Route::get('/' . __('routes.portfolio', [], $lang) , 'HomeController@portfolio')->name('portfolio');
    Route::get('/' . __('routes.inspects', [], $lang) , 'HomeController@inspects')->name('inspects');
    Route::get('/' . __('routes.iyd', [], $lang) , 'HomeController@iyd')->name('iyd');
    Route::get('/' . __('routes.contact', [], $lang), 'HomeController@contact')->name('contact');
    Route::get('/' . __('routes.cyc', [], $lang) , 'HomeController@cyc')->name('cyc');
}

Route::post('/lang/', 'HomeController@lang')->name('lang');

Route::get('/mailer/', 'HomeController@mailmail');
Route::post('/mailer/', 'HomeController@mailer');
//
Route::post('/nl_mail/', 'HomeController@newsletterMailer');
Route::post('/ct_mail/', 'HomeController@conactotMailer');


