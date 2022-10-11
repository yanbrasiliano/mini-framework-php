<?php

namespace App\Models;

use App\Connection;

use PDO;

class Model
{
	protected $db;

	protected function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public static function getModel($model)
	{
		$class = "\\App\\Models\\" . ucfirst($model);
		$conn = Connection::connection();

		return new $class($conn);
	}
}
