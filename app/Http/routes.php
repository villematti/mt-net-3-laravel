<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', 'JobsController@index');

Route::get('project-statuses/{id}/delete', 'ProjectStatusesController@delete');
Route::get('project-statuses', 'ProjectStatusesController@index');
Route::get('project-statuses/new', 'ProjectStatusesController@create');
Route::post('project-statuses', 'ProjectStatusesController@store');

Route::get('project-types/{id}/delete', 'ProjectTypesController@delete');
Route::get('project-types/new', 'ProjectTypesController@create');
Route::get('project-types', 'ProjectTypesController@index');
Route::post('project-types', 'ProjectTypesController@store');

Route::get('task-types/{id}/delete', 'TaskTypesController@delete');
Route::get('task-types/new', 'TaskTypesController@create');
Route::get('task-types', 'TaskTypesController@index');
Route::post('task-types', 'TaskTypesController@store');

Route::get('projects/new', 'ProjectsController@create');
Route::get('projects', 'ProjectsController@index');
Route::post('projects', 'ProjectsController@store');

Route::get('workers/{worker}', 'WorkersController@show');
