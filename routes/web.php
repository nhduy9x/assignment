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

Route::get('/', 'HomeController@index')->name('home');
Route::get('asss', 'HomeController@indexs')->name('homes');
Route::group(['prefix'=>'product'],function(){
Route::get('cate/{slud}', 'HomeController@detail')->name('detail');
Route::get('/{slug?}','HomeController@product')->name('danhmuc');
});

// Route::get('/',function(){
// 	return view('auth.login');
// });
// Route::get('/','HomeController@index')->name('homepage');
// Route::get('dashboard','Admin\DashboardController@index')->name('dashboard');
Route::get('login','Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');