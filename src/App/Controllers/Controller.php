<?php

namespace App\Controllers;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Controller
{
	
	protected $request;
	
	public function __construct(Array $request)
	{
		$this->request = $request;
		$this->getService();
	}
	
	protected function getService()
	{
		if (!isset($this->request['action'])){
			return;
		}
		$this->{$this->request['action']}();
	}
}