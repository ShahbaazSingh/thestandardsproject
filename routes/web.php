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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('pageone/{classid}', 'ProfileController@pageOne');
Route::get('pageone/{classid}/{subject}', 'ProfileController@pageSubject');
Route::get('pageone/{classid}/{subject}/{prof}', 'ProfileController@pageProficiency');
Route::get('pageonestudent/{classid}', 'ProfileController@pageOneStudent');
Route::get('module/{type}/{videoid}', 'ProfileController@ModuleStudent');
Route::get('moduleprogress', 'ProfileController@moduleprogress');
