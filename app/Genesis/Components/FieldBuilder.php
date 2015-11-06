<?php
namespace Genesis\Components;

class FieldBuilder{

	protected $defaultClasses= [
		'default' 	=> 'form-control',
		'checkbox'	=> ''
	]

	public function getDefaultClass($type){
		if(isset($this->defaultClass[$type]))
		{
			return $this->defaultClass[]
		}

	}

	public function buildCssClasses($type, $attributes){
		$defaultClasses = $this->getDefaultClass($type);
		if(isset($attributes['class'])){
			
		}
	}

	public function buildLabel($name){

	}

	public function buildControl($type, $name, $value=null, $attibutes=array(), $options= array()){

	}

	public function buildError($name){
		
	}

	public function buildTemplate($type){
		
	}

	public function input($type, $name, $value=null, $attibutes=array(), $options=array()){
		$this->buildCssClases($type, $attributes);
		$label 		= $this->buildLabel($name);
		$control 	= $this->buildControl($type, $name, $value, $attibutes, $options);
		$error 		= $this->buildError($name);
		$template	= $this->buildTemplate($type);

		return \View::make($template, compact('name', 'label', 'control', 'error'));
	}	
}
