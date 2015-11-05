<?php

use Genesis\Entities\User;

class UsersController extends BaseController{

	public function signUp(){
		return View::make('user/sign-up'); 
	}
	public function register(){
		$data = Input::only(['name','last_name','email','password', 'password_confirmation']);
		$rules = [
			'name' 		=> 'required',
			'last_name' => 'required',
			'email'     => 'required|email|unique:users,email',
			'password'	=> 'required|confirmed',
			'password_confirmation'	=> 'required'
		];
		$validation = Validator::make($data, $rules);

		if($validation->passes()){
			//User::create($data);
			$user = new User($data);
			$user->type = 'employee';
			$user->save();
			return Redirect::route('home');
		}
		return Redirect::back()->withInput()->withErrors($validation->messages());	
	}
}