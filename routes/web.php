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
//
//Route::get('/', function () {
//    return view('welcome')->name('welcome');
//});

Route::group(['namespace'=>'User'], function() {

    Route::get('/', 'HomeController@index')->name('welcome');

    Route::get('/appointment', 'AppointmentController@index')->name('appointment');

    Route::get('/blog', 'BlogController@index')->name('blog');

    Route::get('/blog/{blog}', 'BlogController@show')->name('post');

    Route::get('/blog/tag/{tag}', 'BlogController@tag')->name('tag');

});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function() {

    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\LoginController@login');

    Route::post('/logout',  'Auth\LoginController@logout');

    Route::get('/users', 'UsersController@index')->name('users.index');

    Route::delete('/users/delete/{id}', 'UsersController@delete')->name('users.destroy');

    Route::get('/home', 'HomeController@index')->name('admin.home');

    Route::resource('/admins', 'AdminUsersController');

    Route::resource('/admins', 'AdminUsersController');

    Route::resource('/role', 'RoleController');

    Route::resource('/permission', 'PermissionController');

    Route::resource('/blog', 'BlogController');

    Route::resource('/tag', 'TagController');


});