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
Route::get('/test', 'DidipickController@test');
Route::any('/test2', 'DidipickController@test2');
Route::get('/didipick_login', 'DidipickController@login');
Route::post('/didipick_check_login', 'DidipickController@check_login');
Route::get('/didipick_product', 'DidipickController@product');
Route::get('/brand_search/{brandsno}/{categorysno}', 'DidipickController@brand_search');
Route::get('/category_search/{sno}', 'DidipickController@category_search');
Route::get('/product_page/{page}/{brandsno}/{categorysno}', 'DidipickController@product_page');
Route::get('/didipick_product_info/{sno}', 'DidipickController@product_info');
Route::get('/didipick_logout', 'DidipickController@logout');

Route::get('/didipick_master', 'DidipickController@master');
Route::get('/didipick_master_info/{sno}', 'DidipickController@master_info');
Route::get('/didipick_feedback', 'DidipickController@feedback');
Route::get('/didipick_feedback_info/{sno}', 'DidipickController@feedback_info');

Route::get('/didipick_product_top20', 'DidipickController@product_top20');
Route::get('/didipick_qa', 'DidipickController@qa');
Route::get('/didipick_articles/{sno}', 'DidipickController@articles');
Route::get('/didipick_shoppingprocess', 'DidipickController@shoppingprocess');
Route::get('/didipick_about', 'DidipickController@about');
Route::get('/didipick_favorite', 'DidipickController@favorite');
//ajax
Route::get('/cartnum', 'AjaxController@cartnum');

Route::middleware('didipick_session')->group(function () {
	//ajax
	Route::get('/add_favory_master', 'AjaxController@add_favory_master');
	Route::get('/cancel_favory_master', 'AjaxController@cancel_favory_master');
	Route::get('/add_favory_product', 'AjaxController@add_favory_product');
	Route::get('/cancel_favory_product', 'AjaxController@cancel_favory_product');
	Route::get('/addtocart', 'AjaxController@addtocart');
	Route::get('/cartplus', 'AjaxController@cartplus');
	Route::get('/cartminus', 'AjaxController@cartminus');
	Route::get('/cart_input_quantity', 'AjaxController@cart_input_quantity');
	Route::get('/checkoutsetsession', 'AjaxController@checkoutsetsession');
	Route::get('/common_address', 'AjaxController@common_address');
	Route::get('/select_area', 'AjaxController@select_area');
	Route::get('/add_common_address', 'AjaxController@add_common_address');
	Route::get('/order_action', 'AjaxController@order_action');
	Route::get('/checkquantitycredit', 'AjaxController@checkquantitycredit');
	//會員功能
	Route::get('/didipick_cart', 'DidipickController@cart');
	Route::get('/removecartitem/{id}', 'DidipickController@removecartitem');
	Route::get('/didipick_checkout', 'DidipickController@checkout');
	Route::get('/checkok/{ono}', 'DidipickController@checkok');
	Route::post('/credit-confirm', 'DidipickController@creditconfirm');
});

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
	Route::post('/category_search', 'DidipickBackstageController@category_search');
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
	Route::get('/brand_edit/{sno}', 'DidipickBackstageController@brand_edit');
	Route::get('/brand_open/{sno}', 'BackstageFunctionController@brand_open');
	Route::get('/brand_off/{sno}', 'BackstageFunctionController@brand_off');
	Route::get('/brand_delete/{sno}', 'BackstageFunctionController@brand_delete');
	Route::post('/brand_new_function', 'BackstageFunctionController@brand_new');
	Route::get('/brand_img/{img}', 'BackstageFunctionController@view_brand_img');
	Route::post('/brand_edit_update', 'BackstageFunctionController@brand_edit_update');
	Route::get('/brand_delete_edit_img/{img}/{sno}/{no}', 'BackstageFunctionController@brand_edit_img_delete');
	Route::get('/member', 'DidipickBackstageController@member');
	Route::get('/member_edit/{sno}', 'DidipickBackstageController@member_edit');
	Route::get('/member_open/{sno}', 'BackstageFunctionController@member_open');
	Route::get('/member_off/{sno}', 'BackstageFunctionController@member_off');
	Route::get('/member_delete/{sno}', 'BackstageFunctionController@member_delete');
	Route::post('/member_edit_update', 'BackstageFunctionController@member_edit_update');
	Route::get('/adver', 'DidipickBackstageController@adver');
	Route::get('/adver_new', 'DidipickBackstageController@adver_new');
	Route::get('/adver_open/{sno}', 'BackstageFunctionController@adver_open');
	Route::get('/adver_off/{sno}', 'BackstageFunctionController@adver_off');
	Route::get('/adver_delete/{sno}', 'BackstageFunctionController@adver_delete');
	Route::post('/adver_new_function', 'BackstageFunctionController@adver_new');
	Route::get('/adver_edit/{sno}', 'DidipickBackstageController@adver_edit');
	Route::get('/adver_img/{img}', 'BackstageFunctionController@view_adver_img');
	Route::get('/adver_delete_edit_img/{img}/{sno}', 'BackstageFunctionController@adver_edit_img_delete');
	Route::post('/adver_edit_update', 'BackstageFunctionController@adver_edit_update');
	Route::get('/adver_sort/{sort}/{type}', 'BackstageFunctionController@adver_sort');
	Route::get('/banner', 'DidipickBackstageController@banner');
	Route::get('/banner_new', 'DidipickBackstageController@banner_new');
	Route::get('/banner_open/{sno}', 'BackstageFunctionController@banner_open');
	Route::get('/banner_off/{sno}', 'BackstageFunctionController@banner_off');
	Route::get('/banner_delete/{sno}', 'BackstageFunctionController@banner_delete');
	Route::post('/banner_new_function', 'BackstageFunctionController@banner_new');
	Route::get('/banner_edit/{sno}', 'DidipickBackstageController@banner_edit');
	Route::get('/banner_img/{img}', 'BackstageFunctionController@view_banner_img');
	Route::get('/banner_delete_edit_img/{img}/{sno}', 'BackstageFunctionController@banner_edit_img_delete');
	Route::post('/banner_edit_update', 'BackstageFunctionController@banner_edit_update');
	Route::get('/banner_sort/{sort}/{type}', 'BackstageFunctionController@banner_sort');
	Route::get('/help', 'DidipickBackstageController@help');
	Route::get('/help_new', 'DidipickBackstageController@help_new');
	Route::post('/help_new_function', 'BackstageFunctionController@help_new');
	Route::get('/help_open/{sno}', 'BackstageFunctionController@help_open');
	Route::get('/help_off/{sno}', 'BackstageFunctionController@help_off');
	Route::get('/help_edit/{sno}', 'DidipickBackstageController@help_edit');
	Route::post('/help_edit_update', 'BackstageFunctionController@help_edit_update');
	Route::get('/help_delete/{sno}', 'BackstageFunctionController@help_delete');
	Route::get('/qa', 'DidipickBackstageController@qa');
	Route::get('/qa_new', 'DidipickBackstageController@qa_new');
	Route::post('/qa_new_function', 'BackstageFunctionController@qa_new');
	Route::get('/qa_open/{sno}', 'BackstageFunctionController@qa_open');
	Route::get('/qa_off/{sno}', 'BackstageFunctionController@qa_off');
	Route::get('/qa_edit/{sno}', 'DidipickBackstageController@qa_edit');
	Route::post('/qa_edit_update', 'BackstageFunctionController@qa_edit_update');
	Route::get('/qa_delete/{sno}', 'BackstageFunctionController@qa_delete');
	Route::get('/shoppingprocess', 'DidipickBackstageController@shoppingprocess');
	Route::get('/shoppingprocess_new', 'DidipickBackstageController@shoppingprocess_new');
	Route::get('/about', 'DidipickBackstageController@about');
	Route::get('/about_new', 'DidipickBackstageController@about_new');
	Route::get('/label', 'DidipickBackstageController@label');
	Route::get('/label_new', 'DidipickBackstageController@label_new');
	Route::post('/label_new_function', 'BackstageFunctionController@label_new');
	Route::get('/label_open/{sno}', 'BackstageFunctionController@label_open');
	Route::get('/label_off/{sno}', 'BackstageFunctionController@label_off');
	Route::get('/label_edit/{sno}', 'DidipickBackstageController@label_edit');
	Route::post('/label_edit_update', 'BackstageFunctionController@label_edit_update');
	Route::get('/label_delete/{sno}', 'BackstageFunctionController@label_delete');
	Route::get('/master', 'DidipickBackstageController@master');
	Route::get('/master_new', 'DidipickBackstageController@master_new');
	Route::get('/master_edit/{sno}', 'DidipickBackstageController@master_edit');
	Route::get('/master_open/{sno}', 'BackstageFunctionController@master_open');
	Route::get('/master_off/{sno}', 'BackstageFunctionController@master_off');
	Route::post('/master_new_function', 'BackstageFunctionController@master_new');
	Route::get('/master_delete/{sno}', 'BackstageFunctionController@master_delete');
	Route::get('/master_img/{img}', 'BackstageFunctionController@view_master_img');
	Route::get('/master_delete_edit_img/{img}/{sno}', 'BackstageFunctionController@master_edit_img_delete');
	Route::post('/master_edit_update', 'BackstageFunctionController@master_edit_update');

	Route::get('/feedback', 'DidipickBackstageController@feedback');
	Route::get('/feedback_new', 'DidipickBackstageController@feedback_new');
	Route::get('/feedback_edit/{sno}', 'DidipickBackstageController@feedback_edit');
	Route::get('/feedback_open/{sno}', 'BackstageFunctionController@feedback_open');
	Route::get('/feedback_off/{sno}', 'BackstageFunctionController@feedback_off');
	Route::post('/feedback_new_function', 'BackstageFunctionController@feedback_new');
	Route::get('/feedback_delete/{sno}', 'BackstageFunctionController@feedback_delete');
	Route::get('/feedback_delete_edit_img/{img}/{sno}', 'BackstageFunctionController@feedback_edit_img_delete');
	Route::post('/feedback_edit_update', 'BackstageFunctionController@feedback_edit_update');
});