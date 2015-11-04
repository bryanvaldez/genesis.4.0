<?php namespace Genesis\Entities;


class Category extends \Eloquent {
	protected $fillable = [];

	public function employees(){
		return $this->hasMany('Genesis\Entities\Employee');
	}
	public function getPaginateEmployeesAttribute(){
		return Employee::where('category_id', $this->id)->paginate();
	}
}