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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'SectionController@index')->name('home');

Route::get('/articles', 'ArticleController@index')->middleware('auth');
Route::get('/articles/{article_id}', 'ArticleController@show')->middleware('auth');

Route::get('/sections', 'SectionController@index')->middleware('auth');
Route::get('/sections/{section_id}', 'SectionController@show')->middleware('auth');

Route::get('/send/email', function () {
	$details = [
		'title' => 'Test email',
		'body' => 'Test email body'
	];
	\Mail::to('asburgett@gmail.com')->send(new \App\Mail\SendMailable($details));
	dd("Email is sent2.");
});