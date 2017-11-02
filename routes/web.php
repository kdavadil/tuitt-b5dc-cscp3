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
    return view('home');
});

Route::get('articles', 
	'ArticlesController@showArticles');

Route::get('users', 'UserController@showUsers');

Route::get('users/{id}', 'ArticlesController@showArticlesByAuthor');

Route::get('articles/create', 
	'ArticlesController@create');

Route::post('articles/create', 
	'ArticlesController@store');

Route::get('articles/{id}', 
	'ArticlesController@show');
Route::post('articles/{id}', 
	'CommentController@store');

Route::get('articles/{id}/delete', 
	'ArticlesController@delete');

Route::get('articles/{id}/edit',
	'ArticlesController@edit_form');

Route::post('articles/{id}/edit', 
	'ArticlesController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/goals', 'HomeController@showGoals')->name('goals');

