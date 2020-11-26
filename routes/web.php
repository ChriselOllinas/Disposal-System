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

Route::get('/', function () {
    return view('login');
});
// Route::get('/login', 'LoginController@login');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/newPDF', 'HomeController@newPDF')->name('newPDF');
Route::get('/searchAsset', 'HomeController@searchAsset')->name('searchAsset');
Route::get('/loginForm', 'HomeController@loginForm')->name('loginForm');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/newPDFCreate', 'HomeController@newPDFCreate')->name('newPDFCreate');
Route::get('/printPDF', 'HomeController@printPDF')->name('printPDF');
Route::get('/searchPDF', 'HomeController@searchPDF')->name('searchPDF');
Route::get('/voidModule', 'HomeController@voidModule')->name('voidModule');


// FUNCTION

Route::post('/createPDF', 'HomeController@createPDF')->name('createPDF');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/printPDFExtract/{id}', 'HomeController@printPDFExtract')->name('printPDFExtract');

Route::get('/loginsample', 'HomeController@loginsample')->name('loginsample');

Route::get('/voidModuleEdit/{id}', 'HomeController@voidModuleEdit')->name('voidModuleEdit');
Route::post('/saveUpdatedPDF/{id}', 'HomeController@saveUpdatedPDF')->name('saveUpdatedPDF');

Route::get('/validationModule', 'HomeController@validationModule')->name('validationModule');
Route::get('/validationModuleEdit/{id}', 'HomeController@validationModuleEdit')->name('validationModuleEdit');
