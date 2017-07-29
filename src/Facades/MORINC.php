<?php 

namespace MORINC\Facades;

use Illuminate\Support\Facades\Facade;

class MORINC extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'morinc'; }
}