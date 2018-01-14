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

use Illuminate\Http\Request;

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/jobs', 'Admin\JobController@index')->name('adminJobs');
Route::get('/admin/jobs/{id}/delete', 'Admin\JobController@delete')->name('adminDeleteJob');
Route::get('/admin/projects', 'Admin\ProjectController@index')->name('adminProjects');
Route::get('/admin/projects/{id}/delete', 'Admin\ProjectController@delete')->name('adminDeleteProject');
Route::get('/admin/jobs/new', 'Admin\JobController@new')->name('adminAddJob');
Route::get('/admin/jobs/{id}', 'Admin\JobController@edit')->name('adminEditJob');
Route::post('/admin/jobs', 'Admin\JobController@create')->name('adminCreateJob');
Route::put('/admin/jobs', 'Admin\JobController@update')->name('adminUpdateJob');
Route::get('/admin/projects/new', 'Admin\ProjectController@new')->name('adminAddProject');
Route::get('/admin/projects/{id}', 'Admin\ProjectController@edit')->name('adminEditProject');
Route::post('/admin/projects', 'Admin\ProjectController@create')->name('adminCreateProject');
Route::put('/admin/projects', 'Admin\ProjectController@update')->name('adminUpdateProject');
Route::get('/admin/projects/{id}/activate', 'Admin\ProjectController@activate')->name('adminActivateProject');
Route::get('/admin/projects/{id}/deactivate', 'Admin\ProjectController@deactivate')->name('adminDeactivateProject');
Route::get('/admin/jobs/{id}/activate', 'Admin\JobController@activate')->name('adminActivateJob');
Route::get('/admin/jobs/{id}/deactivate', 'Admin\JobController@deactivate')->name('adminDeactivateJob');



Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/jobs', 'HomeController@jobs')->name('jobs');
Route::get('/project/{id}', 'HomeController@project')->name('project');
Route::get('/job/{id}', 'HomeController@job')->name('job');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@sendEmail')->name('sendEmail');
Route::get('/', function () {
    return view('index');
})->name('home');

//This route is to preview the email template
//Route::get('/mailable', function () {
//    $invoice = new Request();
//    $invoice->name = "Charlie Steenhagen";
//    $invoice->email = "csteen1005@gmail.com";
//    $invoice->phone = "515-520-0549";
//    $invoice->message = "Hello, this is another test in the browser";
//    return new App\Mail\ContactEmail($invoice);
//});