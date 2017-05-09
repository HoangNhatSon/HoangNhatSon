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

Route::get('/Trangchu',[
    'as' => 'Trangchu',
    'uses' => 'TrangchuController@index'
]);

Route::get('/Trangdanhsach',[
    'as' => 'Trangdanhsach',
    'uses' => 'TrangdanhsachController@index'
]);

Route::get('/Trangchitiet/1',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index1'
]);

Route::get('/Trangchitiet/2',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index2'
]);
Route::get('/Trangchitiet/3',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index3'
]);
Route::get('/Trangchitiet/4',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index4'
]);
Route::get('/Trangchitiet/5',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index5'
]);
Route::get('/Trangchitiet/6',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index6'
]);
Route::get('/Trangchitiet/7',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index7'
]);
Route::get('/Trangchitiet/8',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index8'
]);
Route::get('/Trangchitiet/9',[
    'as' => 'Trangchitiet',
    'uses' => 'TrangchitietController@index9'
]);


