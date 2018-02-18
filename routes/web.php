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

Route::get('/',[ 'uses'=>'PostController@index',
    'as'=>'index']);
Route::get('/details/{id?}',[ 'uses'=>'PostController@details',
    'as'=>'details']);
Route::get('/post_ads',[ 'uses'=>'PostController@show',
    'as'=>'post_ads']);
Route::post('/post',[ 'uses'=>'PostController@create',
    'as'=>'post']);
Route::get('{id?}',[ 'uses'=>'PostController@Subcat',
    'as'=>'sub_cat']);

Auth::routes();
Route::get('/verify/{token}','VerifyEmailController@verify')->name('verify');
Route::get('/profile',['uses'=>'ProfileController@profile','as'=>'profile']);
Route::get('/myads',['uses'=>'ProfileController@index','as'=>'ads']);
Route::get('/profile',['uses'=>'ProfileController@profile','as'=>'profile']);
Route::post('/picture',['uses'=>'ProfileController@picture','as'=>'picture']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
