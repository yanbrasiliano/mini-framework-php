<?php

namespace App;

class Connection
{

	public static function connection()
	{
		try {
			$conn = new \PDO(
				"mysql:
				host=localhost.
				dbname=mini-framework;",
				"root",
				"root"
			);

			return $conn;
		} catch (\PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
}
