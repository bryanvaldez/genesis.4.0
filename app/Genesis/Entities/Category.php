<?php namespace Genesis\Entities;


class Category extends \Eloquent {
	protected $fillable = [];

	public function employees(){
		return $this->hasMany('Genesis\Entities\Employee');
	}
}