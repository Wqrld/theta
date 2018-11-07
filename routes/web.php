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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/grades', 'GradeController@index')->name('grades');
Route::get('/schedule', 'ScheduleController@index')->name('schedule');
Route::get('/schedule/{number}', 'ScheduleController@index')->name('schedule');
Route::get('/attendancy', 'AttendancyController@index')->name('attendancy');
Route::get('/elo', 'EloController@index')->name('elo');

Auth::routes();


Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'AccountController@index')->name('account');
    Route::post('/', 'AccountController@update');
});
