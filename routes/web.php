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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['guest']], function () {
    Route::post('login', 'Auth\LoginController@login')->name('post-login');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('', 'Auth\LoginController@get')->name('login');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('overview',
            'OverviewController@getOverview')->name('overview');

        Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    });
});
