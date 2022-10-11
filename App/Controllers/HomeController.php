<?php

namespace App\Controllers;
use App\Models\Model;

use App\Config\Action;

class HomeController extends Action
{
	public function index()
	{
		$home = Model::getModel('Model');

		// $serviceQuery =  IMPLEMENTS SERVICE_QUERY;
		
		$this->render('home');
	}

}
