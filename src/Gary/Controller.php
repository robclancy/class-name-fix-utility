<?php namespace Gary; use ClassNameFixUtility\Facade;

use Illuminate\Support\ServiceProvider as Route;

class Controller extends Route {

	public function register() {


		Facade::fix('Illuminate\Support\Facades\Facade', 'Surrogate');
	}
}