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

Auth::routes();

Route::get('/job/create', 'JobController@create')->middleware('auth')->name('job.create');
Route::post('/job/create', 'JobController@store')->middleware('auth')->name('job.store');
Route::get('/jobs/filter/{filter}', 'JobController@index');
Route::get('/job/{id}', 'JobController@show')->name('job.show');
Route::get('/', 'JobController@index')->name('job.index');

Route::namespace('Api')->prefix('api/v1.0')->group(function () {
    Route::get('/job/{id}', 'JobController@show')->name('api.job.show');
});
