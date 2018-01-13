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
    return view('index');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/jobs', 'Admin\JobController@index')->name('adminJobs');
Route::get('/admin/projects', 'Admin\ProjectController@index')->name('adminProjects');
Route::get('/admin/jobs/new', 'Admin\JobController@new')->name('adminAddJob');
Route::get('/admin/jobs/{id}', 'Admin\JobController@edit')->name('adminGetJob');
Route::post('/admin/jobs', 'Admin\JobController@create')->name('adminCreateJob');
Route::put('/admin/jobs', 'Admin\JobController@update')->name('adminUpdateJob');
Route::get('/admin/projects/new', 'Admin\ProjectController@new')->name('adminAddProject');
Route::get('/admin/projects/{id}', 'Admin\ProjectController@edit')->name('adminEditProject');
Route::post('/admin/projects', 'Admin\ProjectController@create')->name('adminCreateProject');
Route::put('/admin/projects', 'Admin\ProjectController@update')->name('adminUpdateProject');




Route::get('/contact', 'HomeController@contact')->name('contact');
