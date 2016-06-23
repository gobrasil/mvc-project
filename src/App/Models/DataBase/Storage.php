<?php

namespace App\Models\DataBase;

require_once '../Configs/db.php';

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Storage
{
	
	public $PDO;
	
	public function __construct()
	{
		$this->connect();
	}
	
	public function connect()
	{
		$this->PDO = new \PDO(DSN, USER, PASSWD);
	}
	
}

