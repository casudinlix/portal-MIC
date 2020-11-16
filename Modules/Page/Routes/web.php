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


Route::group(['middleware' => ['web', 'auth', 'status'], 'prefix' => 'page'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'PageController@index')->name('page.index');
        Route::get('/create', 'PageController@create')->name('page.create');
        Route::post('/api/page', 'PageController@dataList')->name('page.api');
    });
});
