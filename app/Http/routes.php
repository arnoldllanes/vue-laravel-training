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

Route::get('alerts' , [
	'uses' => 'vueAlertsController@getIndex',
	'as' => 'alerts.alert'
]);

Route::get('begin', function() {
	session()->flash('status', 'You are now signed in');
	
	return redirect('alerts');
});

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

Route::get('/vue-filter', [
	'uses' => 'vueFilterController@getIndex',
	'as' => 'filter.filter'
]);

Route::get('/vue-events', [
	'uses' => 'vueEventsController@getIndex',
	'as' => 'events.events'
]);

Route::get('/animations', [
	'uses' => 'vueAnimationsController@getIndex',
	'as' => 'animate.animate'
]);

Route::get('/duplicate', [
	'uses' => 'vueDuplicateStateController@getIndex',
	'as' => 'duplicate.duplicate'
]);

Route::get('/view/specific', [
	'uses' => 'vueViewSpecificController@getIndex',
	'as' => 'view.content'
]);

Route::get('about', function () {
	return view('about');
});

Route::group(['middleware' => ['web']], function(){
	Route::get('/async-forms', [
		'uses' => 'vueAsyncFormController@getIndex',
		'as' => 'async.form'	
	]);

	Route::delete('/posts/{post}', function(App\Post $post) {
		$post->delete();
	});

});
