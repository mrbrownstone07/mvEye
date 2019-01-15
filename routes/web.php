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

Route::get('/', 'PagesController@index');
Route::get('/about_us', 'PagesController@aboutUs');
Route::get('/contact_us', 'PagesController@contactUs');
Route::get('/news', 'PagesController@news');
Route::get('/jobs', 'PagesController@jobs');
Route::get('/architecture_secvice', 'ServicesController@archService');
Route::get('/interior_service', 'ServicesController@interiorService');
Route::get('/rendering_service', 'ServicesController@renderService');
Route::get('/animation_service', 'ServicesController@animationService');
Route::get('/achitecture_projects', 'ProjectsController@archProject');
Route::get('/interior_projects', 'ProjectsController@interiorProject');
Route::get('/rendering_gallery', 'GalleryController@renderGallery');
Route::get('/animations_gallery', 'GalleryController@animationGallery');




Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
