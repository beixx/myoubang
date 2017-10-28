<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::get('/kpdetail/{id}', 'IndexController@kpdetail');
Route::get('/detail/{tid}/{id}', 'IndexController@txdetail');


Route::get('/txlist/{id}', 'IndexController@txlist');
Route::get('/kplist/{id}', 'IndexController@kplist');


Route::get('/{name}/{id}', 'IndexController@index');
Route::get('/{name}', 'IndexController@index');
Route::get('/{name}', 'IndexController@index');


Route::get('/test', 'IndexController@test');