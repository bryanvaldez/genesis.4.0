<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']); 
Route::get('employees/{slug}/{id}', ['as' => 'category', 'uses' => 'EmployeesController@index']);
Route::get('{slug}/{id}', ['as' => 'employee', 'uses' => 'EmployeesController@show']);

Route::get('sign-up', ['as' => 'sign_up', 'uses' => 'UsersController@signUp']);
Route::post('sign-up', ['as' => 'register', 'uses' => 'UsersController@register']);

Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::get('account', ['as' => 'account', 'uses'=>'UsersController@account']);
Route::put('account', ['as' => 'update_account', 'uses'=>'UsersController@updateAccount']);

Route::get('profile', ['as' => 'profile', 'uses'=>'UsersController@profile']);
Route::put('profile', ['as' => 'update_profile', 'uses'=>'UsersController@updateProfile']);

