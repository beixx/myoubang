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



Route::group(['domain' => env('M_WEB_URL')],function(){
    Route::get('/', 'IndexController@redirect');

    Route::get('/dafen/{name}/{id}', 'IndexController@dafen');
    Route::post('/dingzhi', 'IndexController@dingzhisave');
    Route::post('/savevote', 'IndexController@savevote');
    Route::post('/saveview', 'IndexController@saveview');
    Route::get('/user/{name}/{rand}', 'IndexController@dingzhi');

    Route::get('/search/{city}', 'IndexController@search');
    Route::get('/kpdetail/{id}', 'IndexController@kpdetail');
    Route::get('/detail/{tid}/{id}', 'IndexController@txdetail');


    Route::get('/txlist/{id}', 'IndexController@txlist');
    Route::get('/kplist/{id}', 'IndexController@kplist');


    Route::get('/{name}/{id}', 'IndexController@index');
    Route::get('/{name}', 'IndexController@index');
    Route::get('/{name}', 'IndexController@index');


    Route::get('/test', 'IndexController@test');
});

Route::group(['domain' => env('MERCHANT_URL')],function(){
    Route::get("/" , 'merchant/IndexController@index');
    Route::get("/merchant/login" , 'merchant/IndexController@login');
});