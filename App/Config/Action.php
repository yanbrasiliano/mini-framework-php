<?php

namespace App\Config;

abstract class Action
{

	protected function render($view)
	{
		require_once "../App/Views/" . $this->treatClass() . "/" . $view . ".phtml";
	}

	protected function treatClass()
	{

		$currentClass = get_class($this);
		$currentClass = str_replace('App\\Controllers\\', '', $currentClass);
		$currentClass = \str_replace('Controller', '', $currentClass);
		return $currentClass;
	}
}
