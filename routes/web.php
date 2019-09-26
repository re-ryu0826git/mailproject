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

// 入力フォーム
// name 名前付きルートは特定のルートへURLを生成したり、リダイレクトしたりする
// ルートに定義にnameメソッドをチェーンできる
Route::get('contact', 'ContactController@index')->name('contact');

// 入力内容の確認
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');

// メッセージの送信処理
Route::post('contact/sent', 'ContactController@sent')->name('sent');