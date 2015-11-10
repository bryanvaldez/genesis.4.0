<?php
namespace Genesis\Components;

class FieldBuilder{

	protected $defaultClasses= [
		'default' 	=> 'form-control',
		'checkbox'	=> ''
	];

	public function getDefaultClass($type){
		if(isset($this->defaultClasses[$type]))
		{
			return $this->defaultClasses[$type];
		}
		return $this->defaultClasses['default'];

	}

	public function buildCssClases($type, &$attributes)
	{
		$defaultClasses = $this->getDefaultClass($type);
		
		if(isset($attributes['class']))
		{
			$attributes['class'] .= ' ' . $defaultClasses;
		}
		else
		{
			$attributes['class'] = $defaultClasses;
		}
	}

	public function buildLabel($name)
	{
		if(\Lang::has('validation.attributes.' .  $name))
		{
			//$label = ucfirst(str_replace('_', ' ', $name));
			$label = \Lang::get('validation.attributes.' . $name);
		}
		else
		{
			$label = str_replace('_', ' ', $name);
		}
		
		return ucfirst($label);
	}

	public function buildControl($type, $name, $value=null, $attibutes=array(), $options= array())
	{
		switch ($type)
		{
			case 'select':
				return \Form::select($name, $options, $value, $attributes);
			case 'password':
				return \Form::password($name);
			case 'checkbox':
				return \Form::checkbox($name);
			default:
				return \Form::input($type, $name, $value);
		}
	}

	public function buildError($name)
	{
		$error = null;
		if(\Session::has('errors'))
		{
			$errors =\Session::get('errors');

			if($errors->has($name))
			{
				$error = $errors->first($name);
			}
		}
		return $error;
	}

	public function buildTemplate($type)
	{
		if(\File::exists('app/views/fields/' . $type . '.blade.php'))
		{
			return 'fields/'. $type;
		}
		return 'fields/default';
	}

	public function input($type, $name, $value=null, $attibutes=array(), $options=array()){
		$this->buildCssClases($type, $attributes);
		$label 		= $this->buildLabel($name);
		$control 	= $this->buildControl($type, $name, $value, $attibutes, $options);
		$error 		= $this->buildError($name);
		$template	= $this->buildTemplate($type);

		return \View::make($template, compact('name', 'label', 'control', 'error'));
	}

	public function password($name, $attributes = array())
	{
		return $this->input('password', $name, null, $attributes);
	}

	public function __call($method, $params)
	{
		array_unshift($params, $method);
		return call_user_func_array([$this, 'input'], $params);
	}
		
}
