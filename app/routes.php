<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']); 
Route::get('employees/{slug}/{id}', ['as' => 'category', 'uses' => 'EmployeesController@index']);
Route::get('{slug}/{id}', ['as' => 'employee', 'uses' => 'EmployeesController@show']);
Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UsersController@signUp']);
Route::post('sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);
