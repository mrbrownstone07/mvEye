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

Route::get('/architecture_projects', 'ProjectsController@archProject');
Route::get('/interior_projects', 'ProjectsController@interiorProject');

Route::get('/rendering_gallery', 'GalleryController@renderGallery');
Route::get('/animations_gallery', 'GalleryController@animationGallery');


// admin interior project routes and controllers
Route::get('/admin_interior_projects', 'ProjectsController@adminAllInteriorProjects');
Route::get('/admin_interior_projects/create', 'ProjectsController@createInteriorProject');

// admin arch project routes and controllers
Route::get('/admin_architecture_projects', 'ProjectsController@adminAllArchProjects');
Route::get('/admin_architecture_projects/create', 'ProjectsController@createArchProject');
Route::post('/admin_architecture_projects/store', 'ProjectsController@archProjectStore')->name('archProj.store');
Route::get('/admin_architecture_projects/show/{id}','ProjectsController@adminShowArchProjects' );
Route::get('/admin_architecture_projects/edit/{id}','ProjectsController@admineEditArchProjects' )->name('archProj.edit');
Route::post('/admin_architecture_projects/update', 'ProjectsController@archProjectUpdate')->name('archProj.update');







Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
