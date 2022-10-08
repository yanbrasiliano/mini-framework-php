<?php

namespace App\Controllers;


class ExampleController
{
	public function index()
	{
		$this->render('example');
	}

	public function render($view)
	{
		require_once "../App/Views/Example/" . $view . ".phtml";
	}
}
