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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/users', 'UserController@index')->name('users.index');

Route::get('/roles', 'RolController@index')->name('roles.index');

Route::get('/permisos', 'PermisoController@index')->name('permisos.index');

Route::get('/files', 'UploadFileController@index')->name('files.index');
