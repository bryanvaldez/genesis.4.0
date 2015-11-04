<?php

namespace Genesis\Repositories;

use Genesis\Entities\Employee;
use Genesis\Entities\Category;


class EmployeeRepo extends BaseRepo{

	public function getModel(){
		return new Employee;
	}
	public function findLatest($take = 12){
		return Category::with([
			'employees' => function($q) use ($take){
					$q->take($take);
					$q->orderBy('created_at', 'desc');
				},
			'employees.user'
		])->get();
	}
}