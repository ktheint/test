<?php 

$namespace = 'Survey\Http\Controllers';

Route::group([
	'namespace' =>$namespace,
	'prefix' => 'audit',
], function(){
	Route::get('/', function(){
		return array('Hello', 'this is audit route')	;
	});
	Route::get('test', function(){
		return "This is one more string route";
	});
	Route::get('getlist', 'SurveyListsController@getList');
});