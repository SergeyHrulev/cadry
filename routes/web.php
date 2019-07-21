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

Route::get('/', 'PagesController@index')->name('main');
Route::get('/test', 'PagesController@test')->name('test');

Route::get('/cv-edit', 'PagesController@cvEdit')->name('cvEdit');
Route::post('/resume-store', 'ApplicantController@store')->name('resumeStore');
Route::post('/avatar-store', 'ApplicantController@storeAvatar')->name('storeAvatar');
Route::post('/cv-store', 'CvController@store')->name('cvStore');
Route::get('/test', 'ApplicantController@test');


Route::get('/vacancy/{name}', 'PagesController@vacancyPage')->name('vacancy');
Route::get('/category/{name}', 'CategoryController@getCategoryVacancy')->name('category');
Route::get('/resume-companies', 'PagesController@resumeCompanies')->name('resumeCompanies');
Route::get('/show-resume', 'ApplicantController@showResume')->name('showResume');
Route::get('/service-page', 'PagesController@servicePage')->name('servicePage');
Route::get('/employer-vacancy-response', 'EmployerController@employerVacancyResponse')->name('employerVacancyResponse');
Route::get('/employer-vacancy-jobs', 'EmployerController@employerVacancyJobs')->name('employerVacancyJobs');
Route::get('/employer-vacancy-search', 'EmployerController@employerVacancySearch')->name('employerVacancySearch');
Route::get('/employer-vacancy-show', 'EmployerController@employerVacancyShow')->name('employerVacancyShow');
Route::get('/employer-settings', 'EmployerController@employerSettings')->name('employerSettings');
Route::get('/employer-new-vacancy', 'EmployerController@employerNewVacancy')->name('employerNewVacancy');

//Route::get('');

//Route::all('/reg', 'RegController@register')->name('reg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
