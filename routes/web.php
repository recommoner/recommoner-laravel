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
Auth::routes();
Route::get('/download', 'DownloadController@index')->name('download');
Route::resource('/narratives', 'NarrativesController');
Route::resource('/articles', 'articlesController');
Route::resource('/comments', 'CommentsController');
Route::get('/comments/{id}/{status}', 'commentsController@edit');
Route::get('/terms', 'TermsController@index');
Route::get('/privacy', 'PrivacyController@index');