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


Route::get('/home', 'HomeController@index');
//##pour test des roles 
// Route::get('/article', [
// 'uses' => 'ArticleController@index',
// 'as' => 'ViewArticle',
// 'middleware' => 'roles',
// 'roles' => ['Admin']
// ]);
Route::get('/article','ArticleController@index');
Route::get('/controle', [
    'uses' => 'HomeController@controle',
    'as' => 'ViewControle',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);

    Route::post('/ajoutRole', [
        'uses' => 'HomeController@ajouterRole',
        'as' => 'ViewControle',
        'middleware' => 'roles',
        'roles' => ['Admin'],
        ]);

Route::get('/article/{post_name}', 'ArticleController@show');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/contact', 'ContactController@AfficheListeContact');
Route::get('/deconnexion', 'DeconnexionController@deconnecter');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
