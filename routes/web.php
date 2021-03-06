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

Route::get('/', 'HomeController@index');
Route::get('/category/{category_slug}', 'CategoryController@categorySlug')->name('category');
Route::get('/post/{post_slug}', 'PostController@postSlug')->name('postSlug');

Auth::routes();

Route::get('/admin', 'Admin\HomeController@index')->name('admin.home')->middleware('auth');

Route::group(['middleware' => ['auth']],function(){

  Route::resource('/admin', 'Admin\PostController');
  Route::get('/admin/post/create', 'Admin\PostController@create')->name('admin.create');
  Route::get('/admin/post/edit/{id}', 'Admin\PostController@edit')->name('admin.edit');
});



//Route::get('/home', 'HomeController@index')->name('home');
