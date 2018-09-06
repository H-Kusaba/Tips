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
//記事更新・新規登録
Route::get('edit' ,'ArticleEditController@viewAll');
//記事一覧
Route::get('view' ,'ArticleViewController@viewAll');
//Eloquentの例
Route::get('example', 'ArticleController@index');
//検索
Route::get('find', 'ArticleController@find');
Route::post('find', 'ArticleController@search');
//新規登録
Route::get('insert', 'ArticleController@insert');
Route::post('insert', 'ArticleController@create');
//更新
Route::get('update', 'ArticleController@updateSet');
Route::post('confirm', 'ArticleController@confirm');
Route::post('finish', 'ArticleController@update');
//Route::post('', 'ArticleController@update');