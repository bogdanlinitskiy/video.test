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

//Route::get('/categories','CategoriesController@index');
Route::get('/categories/{category}','CategoriesController@show');
//Route::get('/videos','VideosController@index');
Route::get('/videos/{video}','VideosController@show');
Route::get('/actors','ActorsController@index');
Route::get('/actors/{actor}','ActorsController@show');

Route::get('/popular','VideosController@popular');
Route::get('/new','VideosController@newVideos');

//Users register and login routes
Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store');
Route::get('/logout','LoginController@destroy');
Route::get('/registration','RegistrationController@create');
Route::post('/registration','RegistrationController@store');

//Admin login routes
Route::get('/admin','Admin\MainController@index');
Route::get('/admin/login',['as' => 'admin.login','uses' => 'Admin\LoginController@showLoginForm']);
Route::post('/admin/login',['uses' => 'Admin\LoginController@login']);
Route::get('/admin/logout',['as' => 'admin.logout','uses' => 'Admin\LoginController@logout']);