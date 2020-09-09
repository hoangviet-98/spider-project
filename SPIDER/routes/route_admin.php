<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//login Admin
Route::group(['prefix' => 'authenticate', 'namespace' => 'Admin\Auth'], function (){

    Route::get('login', 'AdminLoginController@getLoginAdmin')->name('get.login.admin');
    Route::post('login', 'AdminLoginController@postLoginAdmin');
});
Route::get('logout','AdminLoginController@logoutAdmin') ->name('get.logout.admin');

//
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){

    Route::get('/', 'AdminController@dashboardAdmin')->name('get.dashboard.admin');

 //Admin
 Route::group(['prefix' => 'auth'], function () {

 Route::get('/', 'AdminAuthController@index') ->name('admin.get.list.admin');

 Route::get('/create', 'AdminAuthController@create') ->name('admin.get.create.admin');
 Route::post('/create', 'AdminAuthController@store');

 Route::get('/update/{id}', 'AdminAuthController@edit') ->name('admin.get.edit.admin');
 Route::post('/update/{id}', 'AdminAuthController@update');

 Route::get('/delete/{id}', 'AdminAuthController@delete') ->name('admin.get.delete.admin');
 });

//User
    Route::group(['prefix' => 'user'], function () {

        Route::get('/', 'AdminUserController@index') ->name('admin.get.list.user');

        Route::get('/create', 'AdminUserController@create') ->name('admin.get.create.user');
        Route::post('/create', 'AdminUserController@store');

        Route::get('/update/{id}', 'AdminUserController@edit') ->name('admin.get.edit.user');
        Route::post('/update/{id}', 'AdminUserController@update');

        Route::get('/delete/{id}', 'AdminUserController@delete') ->name('admin.get.delete.user');
    });

    //User
    Route::group(['prefix' => 'role'], function () {

        Route::get('/', 'AdminRoleController@index') ->name('admin.get.list.role');

        Route::get('/create', 'AdminRoleController@create') ->name('admin.get.create.role');
        Route::post('/create', 'AdminRoleController@store');

        Route::get('/update/{id}', 'AdminRoleController@edit') ->name('admin.get.edit.role');
        Route::post('/update/{id}', 'AdminRoleController@update');

        Route::get('/delete/{id}', 'AdminRoleController@delete') ->name('admin.get.delete.role');
    });

//Category
    Route::group(['prefix' => 'category'], function () {

        Route::get('/', 'AdminCategoryController@index') ->name('admin.get.list.category');

        Route::get('/create', 'AdminCategoryController@create') ->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');

        Route::get('/update/{id}', 'AdminCategoryController@edit') ->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');

        Route::get('/delete/{id}', 'AdminCategoryController@delete') ->name('admin.get.delete.category');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });


    //Product
    Route::group(['prefix' => 'product'], function () {

        Route::get('/', 'AdminProductController@index') ->name('admin.get.list.product');

        Route::get('/create', 'AdminProductController@create') ->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');

        Route::get('/update/{id}', 'AdminProductController@edit') ->name('admin.get.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');

        Route::get('/delete/{id}', 'AdminProductController@delete') ->name('admin.get.delete.product');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');
    });

});
