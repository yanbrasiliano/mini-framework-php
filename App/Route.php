<?php

namespace App;
use App\Bootstrap;

class Route extends Bootstrap
{
	protected function initRoute()
	{

		$route['home'] = array(
			'route' => '/',
			'controller' => 'HomeController',
			'action' => 'index'
		);

		$route['example'] = array(
			'route' => '/example',
			'controller' => 'ExampleController',
			'action' => 'index'
		);

		$this->setRoute($route);
	}
}
