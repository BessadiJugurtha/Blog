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

/*route pour afficher la page de garde du projet*/
Route::get('/', 'HomeController@accueilProjet');

//##pour test des roles 
// Route::get('/article', [
// 'uses' => 'ArticleController@index',
// 'as' => 'ViewArticle',
// 'middleware' => 'roles',
// 'roles' => ['Admin']
// ]);

/*route home*/
Route::get('/home', 'HomeController@index');

/*route affichage d'un article  */
Route::get('/article/{post_name}', 'ArticleController@show');

/*route affichage la première page d'article*/
Route::get('/article','ArticleController@index');

/*route affichage deuxième page article */
Route::get('/article2', 'ArticleController@indexPage2');

/*routes affichage page contact  */
Route::get('/contact', 'ContactController@index');

/*routes envoyer un message  */
Route::post('/contact', 'ContactController@store');

/*routes affichage des trois derniers messages envoyés */
Route::get('/contact', 'ContactController@AfficheListeContact');

/*route panneau de cotrole: accés limité => admin seulement */
Route::get('/controle', [
    'uses' => 'AdminController@controle',
    'as' => 'ViewControle',
    'middleware' => 'roles',
    'roles' => ['Admin'],
    ]);
/*route gérer les roles des users accés limité => admin seulement */
    Route::post('/gererUser', [
        'uses' => 'AdminController@gererUser',
        'as' => 'ViewControle',
        'middleware' => 'roles',
        'roles' => ['Admin'],
        ]);
/*route affichage pofil user  */
    Route::get('/profil', [
        'uses' => 'UserController@profil',
        'as' => 'ViewProfil',
        'middleware' => 'roles',
        'roles' => ['User'],
        ]);

/*route modifier photo de profil  */
    Route::post('/profil', [
        'uses' => 'UserController@modifierPhoto',

        ]);
     

/*routes déconnecter un user */
Route::get('/deconnexion', 'UserController@deconnecter');

/*routes Authenitification  */
Auth::routes();

