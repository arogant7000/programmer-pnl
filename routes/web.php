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

Route::get('/p/about-me', 'HomeController@about');
Route::get('/p/about-team', 'HomeController@about_team');
Route::get('/p/coming-soon', 'HomeController@coming');

Route::get('/p/contact', 'HomeController@getContact');
Route::post('/p/contact', 'HomeController@postContact');

Route::get('/p/service', 'HomeController@service');
Route::get('/p/faq', 'HomeController@faq');



Route::get('/p/search','HomeController@search');

Route::get('/p/article', 'HomeController@indexPost');
Route::get('/category/{id}', 'HomeController@showcats');
Route::get('/tags/{id}', 'HomeController@showtags');
Route::get('/p/{slug}','HomeController@show')->where('slug', '[A-Za-z0-9-_]+');

// ADMIN MIDDLEWARE
Route::group(['middleware'=> ['auth','web','admin']], function(){
  Route::get('admin/user', 'UserController@index');
  Route::get('admin/user/edituser/{id}','UserController@edit');
  Route::post('admin/user/updateuser', 'UserController@update');
  Route::get('admin/user/deleteuser/{id}','UserController@destroy');
  Route::get('admin/user/editrole/{id}','UserController@editrole');
  Route::post('admin/user/updaterole', 'UserController@updaterole');

});


// AUTH MIDDLEWARE
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

    Route::get('admin/user/editpassword/{id}','UserController@editpassword');
    Route::post('admin/user/updatepassword', 'UserController@updatepassword');

    //User Route

    Route::get('admin/user/editprofile/{id}','UserController@editprofile');
    Route::post('admin/user/updateprofile', 'UserController@updateprofile');

});
