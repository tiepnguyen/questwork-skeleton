<?php
namespace App;

class Model extends \Questwork\Model
{
	public function connect()
	{
		return Database::connect();
	}
}