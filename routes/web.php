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

Route::get('/', function() {
    return view('welcome');
});

Route::resource('projects', 'myProjectController');

Route::post('/projects/{project}/tasks', 'myProjectTasksController@store');

Route::patch('/tasks/{task}', 'myProjectTasksController@update');

/*
    GET /projects (index)
    GET /projects/1/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)
*/
/*
Route::get('/projects', 'myProjectController@index');
Route::get('/projects/create', 'myProjectController@create');
Route::get('/projects/{project}', 'myProjectController@show');
Route::post('/projects', 'myProjectController@store');
Route::post('/projects/{project}/edit', 'myProjectController@edit');
Route::patch('/projects/{project}', 'myProjectController@update');
Route::delete('/projects/{project}', 'myProjectController@destroy');
*/
