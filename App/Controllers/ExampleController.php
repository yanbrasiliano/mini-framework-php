<?php

namespace App\Controllers;

use App\Config\Action;


class ExampleController extends Action
{
	public function index()
	{
		$this->render('example');
	}

}
