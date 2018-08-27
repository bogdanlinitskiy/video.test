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
Route::get('/home','HomeController@getVideos')->name('videos');

Route::get('/','HomeController@index');
Route::get('/admin','Admin\MainController@index');


Route::resources([
    '/admin/categories' => 'Admin\CategoriesController',
    '/admin/videos' => 'Admin\VideosController',
    '/admin/actors' =>'Admin\ActorsController',
]);
Route::get('/admin/categories/{category}/delete', 'Admin\CategoriesController@delete');
Route::get('/admin/videos/{video}/delete', 'Admin\VideosController@delete');
Route::get('/admin/actors/{actor}/delete', 'Admin\ActorsController@delete');

Route::get('/popular','Admin\VideosController@popular');
Route::get('/new','Admin\VideosController@newVideos');


Route::get('upload',['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
Route::post('upload',['as' => 'upload_file','uses' => 'UploadController@upload']);