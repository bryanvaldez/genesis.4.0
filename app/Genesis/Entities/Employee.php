<?php namespace Genesis\Entities;

class Employee extends \Eloquent {
	protected $fillable = [];

	public function user(){
		return $this->hasOne('Genesis\Entities\User', 'id', 'id');
	}
}