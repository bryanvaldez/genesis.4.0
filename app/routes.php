<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function(){	return View::make('employee.category');});

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('employees/{slug}/{id}', ['as' => 'category', 'uses' => 'EmployeeController@index']);
Route::get('{slug}/{id}', ['as' => 'employee', 'uses' => 'EmployeeController@show']);
