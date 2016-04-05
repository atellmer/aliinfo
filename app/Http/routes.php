<?php
Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('admin', ['as' => 'admin.posts', 'uses' => 'AdminController@index']);
	Route::get('admin/article/create', ['as' => 'admin.article.create', 'uses' => 'AdminController@create']);
	Route::post('admin/post', ['as' => 'admin.post.store', 'uses' => 'AdminController@store']);
	Route::get('admin/post/{id}', ['as' => 'admin.post.show', 'uses' => 'AdminController@show']);
	Route::get('admin/post/{id}/edit', ['as' => 'admin.post.edit', 'uses' => 'AdminController@edit']);
	Route::delete('admin/post/{id}', ['as' => 'admin.post.destroy', 'uses' => 'AdminController@destroy']);
	Route::put('admin/post/{id}', ['as' => 'admin.post.update', 'uses' => 'AdminController@update']);
});

Route::get('/', ['as' => 'root', 'uses' => 'IndexController@index']);
Route::get('post/{id}', ['as' => 'post.show', 'uses' => 'IndexController@show']);
Route::get('/register', ['as' => 'register', 'uses' => 'IndexController@register']);

Route::any('{path?}', ['as' => 'root', 'uses' => 'IndexController@index']);