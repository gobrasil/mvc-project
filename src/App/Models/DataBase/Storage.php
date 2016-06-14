<?php

namespace App\Models\DataBase;

require_once 'config/db.php';

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Storage
{
	
	public function __construct()
	{
		$this->connect();
	}
	
	public function connect()
	{
		$this->PDO = new \PDO();
	}
	
}

