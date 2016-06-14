<?php

namespace App\Views;

use App\Views\View;

class IndexView extends View
{
	public function loadTemplate()
	{
		$this->smarty->assign('name', 'Gabriel');
		$this->smarty->display('index.tpl');
	}
}