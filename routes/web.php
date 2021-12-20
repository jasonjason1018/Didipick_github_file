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
//前台
Route::get('/', 'DidipickController@index');

//後台
Route::get('/backstage', function(){
	return view('Admin.login');
});
Route::post('/logout', 'DidipickBackstageController@logout');

Route::middleware('admin_session')->group(function () {
	Route::post('/check_login', 'DidipickBackstageController@checklogin');
	Route::get('/adminindex', function(){
		return view('Admin.index');
	});
});