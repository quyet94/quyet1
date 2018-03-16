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
/* lam viec voi controller*/

Route::get('controller','MyController@XinChao');
Route::get('ThamSo/{ten}','MyController@KhoaHoc');

/*gui nhan du lieu voi request va responses*/

Route::get('MyRequest','MyController@GetURL');

/*gui nhan tham so tren request*/
Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=> 'MyController@postForm']);
//Cookie
Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');