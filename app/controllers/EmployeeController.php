<?php

use Genesis\Repositories\CategoryRepo;
use Genesis\Repositories\EmployeeRepo;

class EmployeeController extends \BaseController {

	protected $categoryRepo;
	protected $employeeRepo;

	public function __construct(CategoryRepo $categoryRepo,
								EmployeeRepo $employeeRepo){
		$this->categoryRepo = $categoryRepo;
		$this->employeeRepo = $employeeRepo;
	}
	public function index($slug, $id){	
		$category = $this->categoryRepo->find($id);
		
		return View::make('employee/category', compact('category'));
	}
	public function show($slug, $id){
		$employee = $this->employeeRepo->find($id);
		
		return View::make('employee/show', compact('employee'));
	}
}