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
    return view('welcome');
});

Route::get('add/article', 'ArticleController@addArticle')->name('add:article');
Route::post('save-article', 'ArticleController@saveArticle')->name('post:save:article');
Route::get('article', 'ArticleController@viewArticle')->name('view:article');