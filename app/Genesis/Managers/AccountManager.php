<?php
namespace Genesis\Managers;

class AccountManager extends BaseManager{

	public function getRules(){
		$rules = [
			'name' 		=> 'required',
			'last_name' => 'required',
			'email'     => 'required|email|unique:users,email, ' . $this->entity->id,
			'password'	=> 'confirmed',
			'password_confirmation'	=> ''
		];
		return $rules;
	}
}