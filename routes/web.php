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
Route::get('/home', 'HomeController@index');
Route::get('/article', 'ArticleController@index');
Route::get('/article/{post_name}', 'ArticleController@show');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/contact', 'ContactController@AfficheListeContact');
Route::get('/deconnexion', 'DeconnexionController@deconnecter');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
