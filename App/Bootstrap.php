<?php

namespace App;

abstract class Bootstrap
{
	private $route;
	abstract protected function initRoute();

	public function __construct()
	{
		$this->initRoute();
		$this->run($this->getUrl());
	}

	public function getRoute()
	{
		return $this->route;
	}

	public function setRoute(array $routes)
	{
		$this->route = $routes;
	}

	protected function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

	protected function run($url)
	{
		foreach ($this->getRoute() as $key => $route) {
			if ($url == $route['route']) {
				$class = "App\\Controllers\\" . ucfirst($route['controller']);
				$controller = new $class;
				$action = $route['action'];
				$controller->$action();
			}
		}
	}

}
