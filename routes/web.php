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
 Route::get('/','homeController@index');

 Route::get('about', function ()
  {
  	$bitfumes = [];

       return view('about',compact('bitfumes'));
 });

 Route::group(['prefix'=>'admin'], function(){
 	Route::group(['prefix'=>'quanlyhoso'], function(){
 		//admin/quanlyhoso/danhsach
 		Route::get('danhsach','QuanLyHoSoController@getDanhSach');
 		
 		Route::get('sua','QuanLyHoSoController@getSua');
 		
 		Route::get('them','QuanLyHoSoController@getThem');
  	});

  	Route::group(['prefix'=>'quanlyluong'], function(){
  		//admin/quanlyluong/danhsach
 		Route::get('danhsach','QuanLyLuongController@getDanhSach');

 		Route::get('sua','QuanLyLuongController@getSua');

 		Route::get('them','QuanLyLuongController@getThem');
  	});

  	Route::group(['prefix'=>'timkiemthongtin'], function(){
  		//admin/timkiemthongtin/danhsach
 		Route::get('danhsach','TimKiemThongTinController@getDanhSach');

 		Route::get('sua','TimKiemThongTinController@getSua');

 		Route::get('them','TimKiemThongTinController@getThem');
  	});

  	Route::group(['prefix'=>'user'], function(){
  		//admin/user/danhsach
 		Route::get('danhsach','UserController@getDanhSach');

 		Route::get('sua','UserController@getSua');

 		Route::get('them','UserController@getThem');
  	});

  	Route::group(['prefix'=>'baocao'], function(){
  		//admin/baocao/danhsach
 		Route::get('danhsach','BaoCaoController@getDanhSach');

 		Route::get('sua','BaoCaoController@getSua');

 		Route::get('them','BaoCaoController@getThem');
  	});
  });

 Route::get('/', function(){
  	return view('login');
 });

 Route::get('index', function(){
    return view('admin.layout.index');
 });



