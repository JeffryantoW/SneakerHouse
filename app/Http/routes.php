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

Route::get('/', function () {
    return view('home');
});


Route::get('/home','HomeController@showPagehome');
Route::get('/about','HomeController@showPageAbout');
Route::get('/bootsgalery','HomeController@showPageBootsgalery');
Route::get('/pantofelgalery','HomeController@showPagePantofelgalery');
Route::get('/sneakersgalery','ShoeController@show');
Route::get('/sponsorss','HomeController@showPagesponsors');

//TRANSAKSI
Route::get('/transaksi','ShoeController@showPageTransaction');
Route::post('/transaction/{id}','ShoeController@insertshoes');

Route::get('/login','HomeController@login');
Route::post('/login','HomeController@doLogin');
Route::get('/register','HomeController@register');
Route::post('/register','HomeController@doRegister');
Route::get('/logout','HomeController@logout');