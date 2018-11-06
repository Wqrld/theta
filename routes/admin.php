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




Route::group(['prefix' => 'admin'], function () {
  Route::get('/', 'BaseController@index')->name('admin.index');
  Route::get('/statistics', 'StatisticsController@index')->name('admin.statistics');

  Route::group(['prefix' => 'settings'], function () {
      Route::get('/', 'Settings\IndexController@index')->name('admin.settings');
      Route::get('/mail', 'Settings\MailController@index')->name('admin.settings.mail');
      Route::get('/mail/test', 'Settings\MailController@test')->name('admin.settings.mail.test');
      Route::get('/advanced', 'Settings\AdvancedController@index')->name('admin.settings.advanced');
      Route::patch('/', 'Settings\IndexController@update');
      Route::patch('/mail', 'Settings\MailController@update');
      Route::patch('/advanced', 'Settings\AdvancedController@update');
  });

  Route::group(['prefix' => 'users'], function () {
      Route::get('/', 'UserController@index')->name('admin.users');
      Route::get('/accounts.json', 'UserController@json')->name('admin.users.json');
      Route::get('/new', 'UserController@create')->name('admin.users.new');
      Route::get('/view/{user}', 'UserController@view')->name('admin.users.view');
      Route::post('/new', 'UserController@store');
      Route::patch('/view/{user}', 'UserController@update');
      Route::delete('/view/{user}', 'UserController@delete');
  });


});
