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


// Routes permettant de gérer les articles en stock.
Route::get('/', 'AccueilController@index');
Route::get('/articles', 'ArticlesController@index');
Route::post('/insert/articles', 'ArticlesController@insertArticle');
Route::get('/add/articles', 'ArticlesController@addArticle');
Route::post('/delete/articles', 'ArticlesController@deleteArticle');
Route::post('/update/articles', 'ArticlesController@updateArticle');
Route::post('/update/articles/action', 'ArticlesController@updateArticleAction');


// Route pour gérer les fournisseurs
Route::get('/add/fournisseur', 'FournisseurController@addFournisseur');
