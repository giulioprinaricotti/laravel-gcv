<?php 

namespace LaravelGCV;

use Illuminate\Support\Facades\Facade;

class LaravelGCVFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'LaravelGCV';
	}

}