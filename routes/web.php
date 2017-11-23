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

Route::get('goals_create', 
	'HomeController@create');

Route::get('goals_choose', 
	'HomeController@chooseGoal');

Route::get('goals_create', 
	'HomeController@create');

Route::post('goals_create', 
	'HomeController@store');

Route::get('goals/{id}', 
	'HomeController@edit_goal');

Route::get('goals/{id}/edit', 
	'HomeController@save_goal');

Route::post('goals/{id}/edit', 
	'HomeController@save_goal');

Route::get('goals/{id}/delete', 
	'HomeController@delete_goal');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::post('/profile', 'HomeController@updateImage');

Route::get('profile/{id}/edit', 
	'HomeController@profileEdit');

Route::post('profile/{id}/edit', 
	'HomeController@profileEdit');

Route::get('/goals_finance', 'HomeController@goals_finance');

Route::get('/goals_mental', 'HomeController@goals_mental');

Route::get('/goals_physical', 'HomeController@goals_physical');

Route::get('/goals_spiritual', 'HomeController@goals_spiritual');

Route::get('/goals_relational', 'HomeController@goals_relational');

Route::get('goals_finance/store', 
	'HomeController@store'); 

Route::post('goals_finance/store', 
	'HomeController@store');

Route::get('goals_mental/store', 
	'HomeController@store'); 

Route::post('goals_physical/store', 
	'HomeController@store');

Route::post('goals_relational/store', 
	'HomeController@store'); 

Route::post('goals_spiritual/store', 
	'HomeController@store');

Route::get('/newsfeed',
	'HomeController@newsfeed');

Route::post('/newsfeed', 
	'CommentsController@store');

