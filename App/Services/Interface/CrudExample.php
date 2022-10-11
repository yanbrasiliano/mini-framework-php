<?php
// Implement these methods inside the Service, but outside the Interface directory.
//These methods are for CRUD.

namespace App\Services\Interface;

interface CrudExample
{
	public function create($id);
	public function read($id);
	public function update($id);
	public function delete($id);
}
