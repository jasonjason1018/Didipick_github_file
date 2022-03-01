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
Route::get('/product', 'DidipickController@product');
Route::get('/login', 'DidipickController@login');




//後台
Route::get('/backstage', function(){
	return view('Admin.login');
});

Route::post('/check_login', 'DidipickBackstageController@checklogin');
Route::post('/logout', 'DidipickBackstageController@logout');
Route::middleware('admin_session')->group(function () {
	Route::get('/adminindex', 'DidipickBackstageController@adminindex');
	Route::get('/bc_index', 'DidipickBackstageController@bc_index');
	Route::get('/system', 'DidipickBackstageController@system');
	Route::get('/product', 'DidipickBackstageController@product');
	Route::get('/product_new', 'DidipickBackstageController@product_new');
	Route::get('/product_edit/{sno}', 'DidipickBackstageController@product_edit');
	Route::get('/product_open/{sno}', 'BackstageFunctionController@product_open');
	Route::get('/product_off/{sno}', 'BackstageFunctionController@product_off');
	Route::get('/product_delete/{sno}', 'BackstageFunctionController@product_delete');
	Route::post('/product_new_function', 'BackstageFunctionController@product_new');
	Route::get('/product_edit_img_delete/{img}/{no}/{sno}', 'BackstageFunctionController@product_edit_img_delete');
	Route::get('/product_img_view/{img}', 'BackstageFunctionController@product_img_view');
	Route::post('/product_edit_update', 'BackstageFunctionController@product_edit_update');
	Route::get('/category', 'DidipickBackstageController@category');
	Route::get('/category_new', 'DidipickBackstageController@category_new');
	Route::get('/category_edit/{sno}', 'DidipickBackstageController@category_edit');
	Route::get('/category_open/{sno}', 'BackstageFunctionController@category_open');
	Route::get('/category_off/{sno}', 'BackstageFunctionController@category_off');
	Route::post('/category_new_function', 'BackstageFunctionController@category_new');
	Route::get('/category_delete/{sno}', 'BackstageFunctionController@category_delete');
	Route::get('/category_img/{img}', 'BackstageFunctionController@view_category_img');
	Route::get('/category_delete_edit_img/{img}/{sno}', 'BackstageFunctionController@category_edit_img_delete');
	Route::post('/category_edit_update', 'BackstageFunctionController@category_edit_update');
	Route::get('/brand', 'DidipickBackstageController@brand');
	Route::get('/brand_new', 'DidipickBackstageController@brand_new');
	Route::get('/brand_open/{sno}', 'BackstageFunctionController@brand_open');
	Route::get('/brand_off/{sno}', 'BackstageFunctionController@brand_off');
	Route::get('/brand_delete/{sno}', 'BackstageFunctionController@brand_delete');
	Route::post('/brand_new_function', 'BackstageFunctionController@brand_new');
});