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

Route::get('hello',function(){
	return view('page.trangchu');
});
Route::get('index2',function(){
	return view('page.index');
});
Route::get('index','IndexController@getIndex');

Route::get('product','IndexController@getProduct');

Route::get('type-product/{type}','IndexController@getLoaiProduct')->name('type-product');

Route::get('gioithieu','IndexController@getGioithieu');

Route::get('contact','IndexController@getContact');

Route::get('single-product/{id}','IndexController@getSingleProduct');

Route::get('cart','IndexController@getCart');

Route::get('add-cart/{id}','IndexController@getAddCart');

Route::get('del-cart/{id}','IndexController@getDelItemCart');

Route::get('del-all-cart/{id}','IndexController@getDelAllCart');

Route::get('dat-hang','IndexController@getCheckout');

Route::post('dat-hang','IndexController@postCheckout');

// Route::group(['prefix'=>'cart'],function(){
// 	Route::get('add/{id}','IndexController@getCartAdd');
// 	Route::get('show','IndexController@getCartShow');
// });


Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'news'],function(){
		Route::get('list','NewsController@getListNews');

		Route::get('add','NewsController@getAddNews');
		Route::post('add','NewsController@postAddNews');

		Route::get('edit/{id}','NewsController@getEditNews');
		Route::post('edit/{id}','NewsController@postEditNews');

		Route::get('delete/{id}','NewsController@postDeleteNews');
	});

	Route::group(['prefix'=>'product'],function(){
		Route::get('list','ProductController@getListProduct');

		Route::get('add','ProductController@getAddProduct');
		Route::post('add','ProductController@postAddProduct');

		Route::get('edit/{id}','ProductController@getEditProduct');
		Route::post('edit/{id}','ProductController@postEditProduct');

		Route::get('delete/{id}','ProductController@postDeleteProduct');
	});

	Route::group(['prefix'=>'type-product'],function(){
		Route::get('list','TypeProductController@getListTypeProduct');

		Route::get('add','TypeProductController@getAddTypeProduct');
		Route::post('add','TypeProductController@postAddTypeProduct');

		Route::get('edit/{id}','TypeProductController@getEditTypeProduct');
		Route::post('edit/{id}','TypeProductController@postEditTypeProduct');

		Route::get('delete/{id}','TypeProductController@postDeleteTyepeProduct');
	});

	Route::group(['prefix'=>'bill'],function(){
		Route::get('list','BillController@getListBill');

	});

});
