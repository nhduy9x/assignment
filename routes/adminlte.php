<?php 
Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
Route::group(['prefix'=>'post'],function(){
	Route::get('postlist', 'Admin\PostController@postlist')->name('list.post');
	Route::get('addpost', 'Admin\PostController@postadd')->name('add.post');
	Route::get('deletepost/{id}', 'Admin\PostController@postdelete')->name('xoa.post');
	Route::get('uploadpost/{id}', 'Admin\PostController@postup')->name('sua.post');
	Route::post('savepost', 'Admin\PostController@postsave')->name('save.post');
});
Route::group(['prefix'=>'post-cate'],function(){
	Route::get('catelist', 'Admin\CatePostController@catelist')->name('list.cate');
	Route::get('addcate', 'Admin\CatePostController@cateadd')->name('add.cate');
	Route::get('deletecate/{id}', 'Admin\CatePostController@catedelete')->name('xoa.cate');
	Route::get('uploadcate/{id}', 'Admin\CatePostController@cateup')->name('sua.cate');
	Route::post('savecate', 'Admin\CatePostController@catesave')->name('save.cate');
});
Route::group(['prefix'=>'p-cate'],function(){
	Route::get('catelist', 'Admin\CateProductController@catelist')->name('list.cate-p');
	Route::get('addcate', 'Admin\CateProductController@cateadd')->name('add.cate-p');
	Route::get('deletecate/{id}', 'Admin\CateProductController@catedelete')->name('xoa.cate-p');
	Route::get('uploadcate/{id}', 'Admin\CateProductController@cateup')->name('sua.cate-p');
	Route::post('savecate', 'Admin\CateProductController@catesave')->name('save.cate-p');
});
Route::group(['prefix'=>'product'],function(){
	Route::get('productlist', 'Admin\ProductController@postlist')->name('list.product');
	Route::get('addproduct', 'Admin\ProductController@postadd')->name('add.product');
	Route::get('deleteproduct/{id}', 'Admin\ProductController@postdelete')->name('xoa.product');
	Route::get('uploadproduct/{id}', 'Admin\ProductController@postup')->name('sua.product');
	Route::post('saveproduct', 'Admin\ProductController@postsave')->name('save.product');
});




