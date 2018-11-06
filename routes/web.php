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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/notes', function () {
    return view('notes');
});
Route::get('/schedule', 'ScheduleController@index')->name('schedule');

Route::get('/authl', function () {
    return view('auth.logintest');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'AccountController@index')->name('account');
    Route::post('/', 'AccountController@update');
});
