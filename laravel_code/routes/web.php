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

Route::get('users', 'UserController@users');
Route::get('users_form', 'UserController@users_form');
Route::post('save_user', 'UserController@save_user');
Route::post('update_user', 'UserController@update_user');
Route::get('delete_user/{id}', 'UserController@destroy');


Route::get('add_user', 'UserController@add_user');



Route::get('user_submit', 'UserController@users');
Route::get('/user_role', 'UserRoleController@user_role')->name('user_role');
Route::get('/all_user_role', 'UserRoleController@all_user_role');

Route::get('delete_role/{id}', 'UserRoleController@destroy');
Route::get('edit_role/{id}', 'UserRoleController@edit');

Route::post('/user_role', 'UserRoleController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
