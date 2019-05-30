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
Route::get('/vacancy/{name}', 'PagesController@vacancyPage')->name('vacancy');
Route::get('/category/{name}', 'CategoryController@getCategoryVacancy')->name('category');
Route::get('/resume-companies', 'PagesController@resumeCompanies')->name('resumeCompanies');
Route::get('/show-resume', 'PagesController@showResume')->name('showResume');
Route::get('/service-page', 'PagesController@servicePage')->name('servicePage');
Route::get('/employer-vacancy-response', 'PagesController@employerVacancyResponse')->name('employerVacancyResponse');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
