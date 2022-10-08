<?php

namespace App\Controllers;

use App\Config\Action;

class HomeController extends Action
{
	public function index()
	{
		$this->render('home');
	}

}
