<?php
namespace Genesis\Components;

class FieldBuilder{

	public function buildCssClasess($type, $attribytes){

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

		return \View::make($template, compact());
	}	
}
