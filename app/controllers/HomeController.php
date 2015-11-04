<?php
use Genesis\Repositories\EmployeeRepo;

class HomeController extends BaseController {
	protected $employeeRepo;

	public function __construct(EmployeeRepo $employeeRepo){
		$this->employeeRepo = $employeeRepo;
	}

	public function index()
	{
		$latest_employees = $this->employeeRepo->findLatest();
		return View::make('main/home', compact('latest_employees'));
	}

}