<?php

use Genesis\Entities\User;
use Genesis\Managers\RegisterManager;
use Genesis\Repositories\EmployeeRepo;
use Genesis\Managers\AccountManager;

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
		$manager->save();

		return Redirect::route('home');

	}
	public function account(){
		$user = Auth::user();
		return View::make('user/account', compact('user'));

	}
	public function updateAccount(){
		$user = Auth::user();
		$manager  = new AccountManager($user, Input::all());
		$manager->save();
	
		return Redirect::route('home');
	}
}