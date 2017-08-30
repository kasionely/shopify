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

    Route::get('shop/edit/{id}',[
       'uses'  => 'ManageController@getEdit',
       'as'    => 'manage.getEdit'
    ]);

    Route::get('shop/delete/{id}',[
       'uses'  => 'ManageController@getDelete',
       'as'    => 'manage.getDelete'
    ]);

    Route::post('shop/created',[
        'uses' => 'ProductController@store',
        'as'   => 'manage.store'
    ]);

    Route::post('shop/updated',[
        'uses' => 'ProductController@update',
        'as'   => 'manage.update'
    ]);

    Route::post('shop/deleted',[
        'uses' => 'ProductController@delete',
        'as'   => 'manage.delete'
    ]);



});