<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

include('route_admin.php');
include('route_user.php');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/allroles', function ( ){
//    $admins = \App\Models\Admin::with('role')->first();
//
//    return $admins->role;
//
//});

Auth::routes();
Route::group(['namespace' => 'Auth', 'prefix' => 'account'], function () {
    Route::get('register', 'RegisterController@getRegister')->name('get.register');
    Route::post('register', 'RegisterController@postRegister')->name('post.register');

    Route::get('login', 'LoginController@getLogin')->name('get.login');
    Route::post('login', 'LoginController@postLogin')->name('post.login');

    Route::get('logout', 'LoginController@getLogout')->name('get.logout.user');
    Route::get('reset-password', 'ResetPasswordController@getEmailReset')->name('get.email_reset_password');
    Route::post('reset-password', 'ResetPasswordController@checkEmailResetPassword');

    Route::get('new-password', 'ResetPasswordController@newPassword')->name('get.new_password');
    Route::post('new-password', 'ResetPasswordController@savePassword');

});

Route::group(['namespace' => 'Frontend'], function (){
   Route::get('/','HomeController@index')->name('get.home');

   Route::get('/404','HomeController@error_page')->name('get.errors');


    Route::get('category/{slug}-{id}', 'CategoryController@getlistProduct')->name('get.list.product');
    Route::get('/product','ProductController@index')->name('get.all.product');
    Route::get('product/{slug}-{id}', 'ProductDetailController@productDetail')->name('get.detail.product');
//Route::get('/schedule', 'Schedule@index')->name('schedule');

    Route::prefix('shopping')->group(function () {
        Route::get('/add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
        Route::get('/category', 'ShoppingCartController@getListShoppingCart')->name('get.list.shopping.cart');
        Route::get('/update-cart/{id}', 'ShoppingCartController@updateShoppingCart')->name('ajax_update.shopping.cart');
        Route::get('/delete-cart/{id}', 'ShoppingCartController@deleteProductItem')->name('delete.shopping.cart');
    });

    Route::group(['prefix' => 'cart', 'middleware' => 'check_user_login'], function () {
        Route::get('/pay', 'ShoppingCartController@getFormPay')->name('get.form.pay');
        Route::post('/pay', 'ShoppingCartController@saveInfoShoppingCart');
    });

//Article
    Route::get('post', 'ArticleController@getListArticle')->name('get.list.article');

// Schedule
    Route::get('schedule', 'ScheduleController@index')->name('get.schedule');
    Route::post('schedule', 'ScheduleController@saveInfoSchedule');

});
