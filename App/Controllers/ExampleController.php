<?php

namespace App\Controllers;

use App\Config\Action;


class ExampleController extends Action
{
	public function index()
	{
		$this->render('example');
	}

	// public function render($view)
	// {
	// 	require_once "../App/Views/Example/" . $view . ".phtml";
	// }
}
