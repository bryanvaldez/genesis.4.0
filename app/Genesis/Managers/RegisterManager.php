<?php
namespace Genesis\Managers;

class RegisterManager extends BaseManager{

	public function getRules(){
		$rules = [
			'name' 		=> 'required',
			'last_name' => 'required',
			'email'     => 'required|email|unique:users,email',
			'password'	=> 'required|confirmed',
			'password_confirmation'	=> 'required'
		];
		return $rules;
	}
}