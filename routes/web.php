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
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/about_me', 'HomeController@about');
Route::get('/maintenance', 'HomeController@maintenance');
Route::get('/contact', 'HomeController@contact');
Route::get('/service', 'HomeController@service');
Route::get('/faq', 'HomeController@faq');
Route::get('/er', 'HomeController@er');

Route::get('/article', 'HomeController@indexPost');

Route::get('/p/{slug}','HomeController@show')->where('slug', '[A-Za-z0-9-_]+');


Route::group(['middleware'=> ['auth']], function(){

Route::get('admin/', 'HomeController@indexAdmin');

//POSTS ROute
Route::get('admin/posts', 'Auth\PostsController@index');
Route::get('admin/posts/create', 'Auth\PostsController@create');
Route::post('admin/posts/createpost', 'Auth\PostsController@store');
Route::get('admin/posts/editpost/{slug}','Auth\PostsController@edit');
Route::post('admin/posts/updatepost', 'Auth\PostsController@update');
Route::get('admin/posts/deletepost/{id}','Auth\PostsController@destroy');

// catefories and tag
  Route::resource('admin/categories', 'CategoryController', ['except' => ['create']]);
    Route::resource('admin/tags', 'TagController', ['except' => ['create']]);
    Route::get('admin/categories/deletecategories/{id}','CategoryController@destroy');
    Route::get('admin/tag/deletetag/{id}','TagController@destroy');

});
