<?php namespace Genesis\Entities;

class Employee extends \Eloquent {
	protected $fillable = [];
	protected $perPage =10;

	public function user(){
		return $this->hasOne('Genesis\Entities\User', 'id', 'id');
	}
	public function category(){
		return $this->belongsTo('Genesis\Entities\Category');
	}
	public function getJobTypeTitleAttribute(){
		return \Lang::get('utils.job_types.' . $this->job_type); 
	}
}