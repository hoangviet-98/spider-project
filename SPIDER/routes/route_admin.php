<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'welcome';
// });

Route::get('/', function () {
    return view('admin/home');
});


Route::prefix('admin')->group(function () {

Route::get('/', [
    'as' => 'get.dashboard.admin',
    'uses' => 'AdminController@dashboardAdmin'
]);

});