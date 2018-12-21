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
    return view('welcome');
});

// Get all Jobs
Route::get('/api/jobs/all','JobsController@getAllJobs');


// Get individual Jobs
Route::get('/api/jobs/{id}','JobsController@getIndividualJobs');

// get individual job detail
Route::get('/api/jobs/detail/{id}','JobsController@getJobDetails');


// Get job by category
Route::get('/api/jobs/category/{category}','JobsController@getJobByCategory');


// Get Job by Search
Route::get('/api/jobs/category/{location}/{experience}/{jobtype}','JobsController@getJobBySearch');


