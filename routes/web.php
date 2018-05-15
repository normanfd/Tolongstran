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

Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');

Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');

Route::get('/myaccount', 'myaccountController@myaccount')->name('myaccount');

Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');

Route::get('/post/furniture', 'PostController@furniture')->name('furniture');
Route::get('/post/furniture/{post}', 'PostController@showfurniture')->name('post.showfurniture');

Route::get('/post/kostum', 'PostController@kostum')->name('kostum');
Route::get('/post/kostum/{post}', 'PostController@showkostum')->name('post.showkostum');

Route::get('/post/tenda', 'PostController@tenda')->name('tenda');
Route::get('/post/tenda/{post}', 'PostController@showtenda')->name('post.showtenda');

Route::get('/post/musik', 'PostController@musik')->name('musik');
Route::get('/post/musik/{post}', 'PostController@showmusik')->name('post.showmusik');
 
Route::get('/post/elektronik', 'PostController@elektronik')->name('elektronik');
Route::get('/post/elektronik/{post}', 'PostController@showelektronik')->name('post.showelektronik');


Route::get('/post/transaction', 'PostController@transaction')->name('post.transaction');
Route::get('/asetku', 'AsetController@aset')->name('aset');