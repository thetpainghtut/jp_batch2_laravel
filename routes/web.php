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

// Route::get('/', function () {
//     // return view('welcome');
//   return 'Hello Laravel 7';
// });

// Route::get('/','PageController@home')->name('homepage');

Route::get('/','MainController@main')->name('homepage');

Route::get('detail/{id}','MainController@detail')->name('detailpage');

Route::get('main/{key}','PageController@main')->name('mainpage');

Route::resource('staff','StaffController');  // 7 (get-4)(post-1)(put-1)(delete-1) routes

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('payrolls','PayrollController');

Route::post('getstaff','PayrollController@getstaff')->name('getstaff');
