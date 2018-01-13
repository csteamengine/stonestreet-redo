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
Route::get('/admin/job', 'Admin\JobController@job')->name('adminGetJob');
Route::post('/admin/job', 'Admin\JobController@createjob')->name('adminCreateJob');
Route::put('/admin/job', 'Admin\JobController@createjob')->name('adminUpdateJob');
Route::get('/admin/project', 'Admin\ProjectController@project')->name('adminGetProject');
Route::post('/admin/project', 'Admin\ProjectController@project')->name('adminCreateProject');
Route::put('/admin/project', 'Admin\ProjectController@project')->name('adminUpdateProject');




Route::get('/contact', 'HomeController@contact')->name('contact');
