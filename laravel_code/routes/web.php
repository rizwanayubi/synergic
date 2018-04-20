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

/* User routes start*/
Route::get('users', 'UserController@users');
Route::get('user_form', 'UserController@user_form');
Route::post('user_save', 'UserController@user_save');
Route::get('edit_user/{id}', 'UserController@edit');
Route::post('update_user/{id}', 'UserController@update');
Route::get('delete_user/{id}', 'UserController@destroy');
Route::get('add_user', 'UserController@add_user');
Route::get('user_profile', 'UserController@user_profile');
Route::post('update_profile/{id}', 'HomeController@update_profile');
/* User routes end*/

/* User role routes start*/
Route::get('/all_user_role', 'UserRoleController@all_user_role');
Route::post('save_role', 'UserRoleController@save_role');
Route::post('update/{id}', 'UserRoleController@update');
Route::get('delete_role/{id}', 'UserRoleController@destroy');
Route::get('edit/{id}', 'UserRoleController@edit');
Route::get('user_role', 'UserRoleController@user_role');
/* User role routes end*/

/* job category routes start*/
Route::get('jobcat_form', 'JobController@jobcat_form');
Route::post('jobcat_save', 'JobController@jobcat_save');
Route::get('categories', 'JobController@categories');
Route::get('delete_cat/{id}', 'JobController@delete_cat');
/* job routes start*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');