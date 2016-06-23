<?php

namespace App\Controllers;

use App\Views\View;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class Controller
{
	protected $request;
	protected $model;
	protected $view;
	
	public function __construct(Array $request)
	{
		$this->request = $request;
	}
	
	protected function getService()
	{
		if (!isset($this->request['action'])){
			return;
		}
		$this->{$this->request['action']}();
	}
}