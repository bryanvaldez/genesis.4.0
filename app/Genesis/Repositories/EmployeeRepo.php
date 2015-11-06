<?php

namespace Genesis\Repositories;

use Genesis\Entities\Employee;
use Genesis\Entities\Category;
use Genesis\Entities\User;


class EmployeeRepo extends BaseRepo{

	public function getModel(){
		return new Employee;
	}
	public function findLatest($take = 10){
		return Category::with([
			'employees' => function($q) use ($take){
					$q->take($take);
					$q->orderBy('created_at', 'desc');
				},
			'employees.user'
		])->get();
	}
	public function newEmployee(){
		$user = new User();
		$user->type = 'employee';
		return $user;
	}
}