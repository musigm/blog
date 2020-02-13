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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 顯示表單
Route::get('/excel', 'ExcelController@show_table');
Route::get('/get_data', 'ExcelController@get_data')->name('get_data');;

//excel匯入匯出
Route::get('/excel/export/all', 'ExcelController@export_all')->name('excel.export.all');
Route::post('/excel/export', 'ExcelController@export')->name('excel.export');
Route::post('/excel/import', 'ExcelController@import')->name('excel.import');
// 搜尋
// Route::post('/excel/search', 'ExcelController@search')->name('excel.search');

//權限管理
Route::get('/administrative' ,'UserController@show_table');
Route::post('/administrative/modify', 'UserController@modify')->name('user.role');


// Route::get('/administrative' ,'UserController@boot');
// 只有系統管理者可以執行
// Route::get('/someAction', 'MyController@someAction') -> middleware('can:admin');
