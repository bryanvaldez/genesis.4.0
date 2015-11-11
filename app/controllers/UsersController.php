<?php

use Genesis\Entities\User;
use Genesis\Managers\RegisterManager;
use Genesis\Repositories\EmployeeRepo;

class UsersController extends BaseController{

	protected $employeeRepo;

	public function __construct(EmployeeRepo $employeeRepo){
		$this->employeeRepo = $employeeRepo;
	}
	public function signUp(){
		return View::make('user/sign-up'); 
	}
	public function register(){
		$user = $this->employeeRepo->newEmployee();
		$manager  = new RegisterManager($user, Input::all());

		if($manager->save()){
			return Redirect::route('home');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());	
	}
	public function account(){
		$user = Auth::user();
		return View::make('users/account', compact($user));
	}
}