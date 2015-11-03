<?php

namespace Genesis\Repositories;

use Genesis\Entities\Employee;

class EmployeeRepo extends BaseRepo{

	public function getModel(){
		return new Employee;
	}
}