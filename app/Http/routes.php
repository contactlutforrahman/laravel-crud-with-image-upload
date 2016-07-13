<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StudentController@create');
Route::post('/student/save', 'StudentController@store');
Route::get('/student/all', 'StudentController@index');
Route::get('/student/show/{id}', 'StudentController@show');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::post('/student/update/{id}', 'StudentController@update');
Route::get('/student/delete/{id}', 'StudentController@destroy');
