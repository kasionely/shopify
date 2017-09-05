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

    Route::get('shop/products/list',[
        'uses' => 'ManageController@getList',
        'as'   => 'manage.product.list'
    ]);

    Route::get('shop/products/add',[
        'uses' => 'ManageController@getAdd',
        'as'   => 'manage.product.add'
    ]);

    Route::get('shop/products/edit/{product}',[
       'uses'  => 'ManageController@getEdit',
       'as'    => 'manage.product.edit'
    ]);

    Route::get('shop/category/list',[
       'uses'  => 'ManageController@getCategoryList',
       'as'    => 'manage.category.list'
    ]);

    Route::get('shop/category/add', [
       'uses'  => 'ManageController@getCategoryAdd',
       'as'    => 'manage.category.add'
    ]);

    Route::get('shop/category/edit/{category}', [
       'uses'  => 'ManageController@getCategoryEdit',
       'as'    => 'manage.category.edit'
    ]);

    Route::post('shop/products/created',[
        'uses' => 'ProductController@store',
        'as'   => 'manage.product.store'
    ]);

    Route::post('shop/products/updated{id}',[
        'uses' => 'ProductController@update',
        'as'   => 'manage.product.update'
    ]);

    Route::post('shop/products/deleted{id}',[
        'uses' => 'ProductController@delete',
        'as'   => 'manage.product.delete'
    ]);

    Route::post('shop/category/created',[
       'uses'  => 'CategoryController@store',
       'as'    => 'manage.category.store'
    ]);

    Route::post('shop/category/updated{id}',[
       'uses'  => 'CategoryController@update',
       'as'    => 'manage.category.update'
    ]);

    Route::post('shop/category/deleted{id}',[
       'uses'  => 'CategoryController@deleted',
       'as'    => 'manage.category.delete'
    ]);
});

Route::group(['prefix' => 'user'], function()
{
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as'   => 'user.register'
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as'   => 'user.register'
    ]);

    Route::get('/login', [
        'uses' => 'UserController@getLogin',
        'as'   => 'user.login'
    ]);

    Route::post('/login', [
        'uses' => 'UserController@Login',
        'as'   => 'user.login'
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