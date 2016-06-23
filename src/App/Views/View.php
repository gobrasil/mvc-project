<?php

namespace App\Views;

use App\Controllers\Controller;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class View 
{
	protected $twig_envy;
	protected $controller;
	
	public function __construct(Controller $controller)
	{
		$this->controller = $controller;
		$this->twig_envy = $twig_envy;
	}
	
}