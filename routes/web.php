<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{login_failed?, registration_failed?}', 'MainController@welcome');
Route::post('/', 'MainController@userlogin');
Route::get('users/{username}', 'MainController@displayUser')->name('users');