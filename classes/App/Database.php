<?php
namespace App;

class Database extends \Questwork\Database
{
	protected static $connect;

	/**
	 * Create singleton connection
	 */
	public static function connect()
	{
		if (is_null(self::$connect)) {
			self::$connect = new self(require 'config/database.php');
		}
		return self::$connect;
	}

	/**
	 * Implement this function to log queries
	 */
	public function query($command, $params = NULL)
	{
		return parent::query($command, $params);
	}
}
