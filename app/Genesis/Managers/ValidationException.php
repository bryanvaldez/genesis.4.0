<?php namespace Genesis\Managers;

class ValidationException extends \Exception{

	protected $errors;

	public function __construct($message, $errors)
	{
		parent::__construct($message);
	}

	public function getErrors()
	{
		return $this->errors;
	}
}