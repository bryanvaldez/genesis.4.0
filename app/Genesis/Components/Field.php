<?php namespace Genesis\Components;

use Illuminate\Support\Facades\Facade;

class Field extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'field'; }

}