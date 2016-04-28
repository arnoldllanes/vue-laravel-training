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

Route::get('api/tasks', function() {
	return App\Task::latest()->get();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vue-component', [
	'uses' => 'vueComponentExController@getIndex',
	'as' => 'component.component'
]);

Route::get('/vue-resource', [
	'uses' => 'vueResourceController@getIndex',
	'as' => 'resource.resource'
]);

Route::get('/vue-laravel-workflow', [
	'uses' => 'vueWorkflowController@getIndex',
	'as' => 'workflow.workflow'
]);
