<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "PresentationController@index")->name("index");
Route::get('/chi-siamo', "PresentationController@about")->name("about");
Route::get('/cosa-facciamo', "PresentationController@work")->name("work");
Route::get('/servizio/{title}', "PresentationController@serviceDetails")->name("service-details");
Route::get('/contatti', "PresentationController@contacts")->name("contacts");
Route::post('/contatti/submit', "PresentationController@submit")->name("submit");
Route::get('grazie/{name}', "PresentationController@thankYou")->name('thank-you');

