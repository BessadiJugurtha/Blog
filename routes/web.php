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


Route::get('/', 'HomeController@accueilProjet');
//##pour test des roles 
// Route::get('/article', [
// 'uses' => 'ArticleController@index',
// 'as' => 'ViewArticle',
// 'middleware' => 'roles',
// 'roles' => ['Admin']
// ]);
Route::get('/home', 'HomeController@index');
Route::get('/article','ArticleController@index');
Route::get('/controle', [
    'uses' => 'AdminController@controle',
    'as' => 'ViewControle',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);

    Route::post('/gererUser', [
        'uses' => 'AdminController@gererUser',
        'as' => 'ViewControle',
        'middleware' => 'roles',
        'roles' => ['Admin'],
        ]);

        
    
    Route::get('/profil', [
        'uses' => 'UserController@profil',
        'as' => 'ViewProfil',
        'middleware' => 'roles',
        'roles' => ['User'],
        ]);
    Route::post('/profil', [
        'uses' => 'UserController@modifierPhoto',

        ]);
     

Route::get('/article/{post_name}', 'ArticleController@show');
Route::get('/article2', 'ArticleController@indexPage2');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/contact', 'ContactController@AfficheListeContact');
Route::get('/deconnexion', 'UserController@deconnecter');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
