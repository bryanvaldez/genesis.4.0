<?php

use Genesis\Entities\User;
use Genesis\Managers\RegisterManager;
use Genesis\Repositories\EmployeeRepo;

class UsersController extends BaseController{

	protected $employeeRepo;

	public function __construct(EmployeeRepo $employeeRepo){
		$this->employeRepo = $employeeRepo
	}

	public function signUp(){
		return View::make('user/sign-up'); 
	}
	public function register(){
		$user = $this->employeeRepo->newEmployee();
		$manager  = new RegisterManager($user, Input::all());

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