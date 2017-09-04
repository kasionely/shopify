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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'shop.index'
]);

//Route::get('/manage', 'ManageManageController@getIndex');

Route::group(['namespace' => 'manage', 'prefix' => 'manage'], function()
{
    Route::get('/',[
        'uses' => 'ManageController@getIndex',
        'as'   => 'manage.index'
    ]);

    Route::get('shop/list',[
        'uses' => 'ManageController@getList',
        'as'   => 'manage.getList'
    ]);

    Route::get('shop/add',[
        'uses' => 'ManageController@getAdd',
        'as'   => 'manage.getAdd'
    ]);

    Route::get('shop/edit/{product}',[
       'uses'  => 'ManageController@getEdit',
       'as'    => 'manage.getEdit'
    ]);

    Route::post('shop/created',[
        'uses' => 'ProductController@store',
        'as'   => 'manage.store'
    ]);

    Route::post('shop/updated{id}',[
        'uses' => 'ProductController@update',
        'as'   => 'manage.update'
    ]);

    Route::post('shop/deleted{id}',[
        'uses' => 'ProductController@delete',
        'as'   => 'manage.delete'
    ]);
});

Route::group(['prefix' => 'user'], function()
{
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as'   => 'user.signup'
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as'   => 'user.signup'
    ]);

    Route::get('/login', [
        'uses' => 'UserController@getLogin',
        'as'   => 'user.signin'
    ]);

    Route::post('/login', [
        'uses' => 'UserController@Login',
        'as'   => 'user.signin'
    ]);

    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as'   => 'user.profile'
    ]);

    Route::get('/logout',[
        'uses' => 'UserController@getLogout',
        'as'   => 'user.logout'
    ]);
});