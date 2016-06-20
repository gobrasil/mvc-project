<?php

namespace App\Views;

use Smarty;
use App\Controllers\Controller;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class View 
{
	protected $smarty;
	protected $controller;
	
	public function __construct(Smarty $smarty_class, Controller $controller)
	{
		$this->smarty = $smarty_class;
		$this->smarty->template_dir = '../src/App/Views/templates/';
		$this->smarty->compile_dir = '../src/App/Views/templates_c/';
		$this->smarty->config_dir = '../src/App/Views/configs/';
		$this->smarty->cache_dir = '../src/App/Views/cache/';
		$this->smarty->compile_check = true;
		$this->controller = $controller;
		$this->loadTemplate();
	}
	
}