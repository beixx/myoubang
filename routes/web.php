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
    //登录
    Route::get("/merchant/login" , 'Merchant\LoginController@login');
    Route::post("/merchant/check" , 'Merchant\LoginController@check');
    Route::get("/merchant/logout" , 'Merchant\LoginController@logout');

    //首页
    Route::get("/" , 'Merchant\IndexController@index');
    Route::get("/merchant/welcome" , 'Merchant\IndexController@welcome');

    Route::get("/merchant/addpic" , 'Merchant\IndexController@addpic');
    Route::post("/merchant/addpic" , 'Merchant\IndexController@addpic');
    Route::get("/merchant/yfctenantspic" , 'Merchant\IndexController@yfctenantspic');
    Route::get("/merchant/picdel" , 'Merchant\IndexController@picdel');


    Route::get("/merchant/addset" , 'Merchant\IndexController@addset');
    Route::post("/merchant/addset" , 'Merchant\IndexController@addset');
    Route::get("/merchant/yfctenantsset" , 'Merchant\IndexController@yfctenantsset');
    Route::get("/merchant/setdel" , 'Merchant\IndexController@yfctenantsset');
});