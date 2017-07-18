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
Route::get('theloai',function(){
	return view('admin.theloai.danhsach');
});
Route::get('login','loginController@getLogin');
Route::post('login','loginController@postLogin');
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@getThem');
	});
	Route::group(['prefix'=>'loaitin'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@getThem');
	});
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@getThem');
	});
	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@getThem');
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','TheLoaiController@getDanhSach');
		Route::get('sua','TheLoaiController@getSua');
		Route::get('them','TheLoaiController@getThem');
	});
});