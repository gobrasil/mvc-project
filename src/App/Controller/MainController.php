<?php

namespace App\Controller;
use App\View\IndexView;
use App\Model\Calculator;

class MainController
{

	public function index()
	{
		if(!isset($_REQUEST['action'])){
			return;
		}
		$view = new IndexView();
		$cal = new Calculator();
		echo $view->showTheResult(
				$cal->Some(5, 456)
				);
		
	}
	
}