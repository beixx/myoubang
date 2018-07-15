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

    Route::post('/get/sheyingprice', 'IndexController@sheyingprice');
    Route::post('/get/hunliprice', 'IndexController@hunliprice');
});

Route::group(['domain' => env('WWW_URL')],function(){
    Route::get('/', 'IndexController@redirect');

    Route::get('/dafen/{name}/{id}', 'IndexController@dafen');
    Route::post('/dingzhi', 'IndexController@dingzhisave');
    Route::post('/savevote', 'IndexController@savevote');
    Route::post('/saveview', 'IndexController@saveview');
    Route::get('/user/{name}/{rand}', 'IndexController@dingzhi');

    Route::get('/search/{city}', 'IndexController@search');
    Route::get('/kpdetail/{id}', 'IndexController@kpdetail');
    Route::get('/detail/{tid}/{id}', 'IndexController@txdetail');


    Route::get('/i/{id}', 'IndexController@i');
    Route::get('/wenda/{id}', 'IndexController@wenda');
    Route::get('/txlist/{id}', 'IndexController@txlist');
    Route::get('/kplist/{id}', 'IndexController@kplist');
    Route::get('/baojia/{name}','IndexController@baojia');

    Route::get('/{name}/{id}', 'IndexController@index');
    Route::get('/{name}', 'IndexController@index');
    Route::get('/{name}', 'IndexController@index');


    Route::get('/test', 'IndexController@test');
    
    Route::post('/get/sheyingprice', 'IndexController@sheyingprice');
    Route::post('/get/hunliprice', 'IndexController@hunliprice');
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
    Route::get("/merchant/setdel" , 'Merchant\IndexController@setdel');
    Route::get("/merchant/setpackage" , 'Merchant\IndexController@setpackage');
    Route::post("/merchant/setpackage" , 'Merchant\IndexController@setpackage');


    Route::post("/merchant/fileupload" , 'Merchant\IndexController@fileupload');
    Route::post("/merchant/filesave" , 'Merchant\IndexController@filesave');
    Route::post("/merchant/poke" , 'Merchant\IndexController@poke');
    Route::get("/merchant/recommend" , 'Merchant\IndexController@recommend');

});


Route::group(['domain' => env('ADMIN_URL')],function(){
    //登录
    Route::get("/admin/login" , 'Admin\LoginController@login');
    Route::post("/admin/check" , 'Admin\LoginController@check');
    Route::get("/admin/logout" , 'Admin\LoginController@logout');

    //首页
    Route::get("/" , 'Admin\IndexController@index');
    Route::get("/admin/welcome" , 'Admin\IndexController@welcome');
    Route::get("/admin/xpokelist" , 'Admin\IndexController@xpokelist');
    Route::get("/admin/poke" , 'Admin\IndexController@poke');
    Route::get("/admin/pokesucc" , 'Admin\IndexController@pokesucc');
    Route::get("/admin/pokeerror" , 'Admin\IndexController@pokeerror');

    Route::get("/admin/askNew" , 'Admin\IndexController@askNew');
    Route::post("/admin/askNewPost" , 'Admin\IndexController@askNew');

});
