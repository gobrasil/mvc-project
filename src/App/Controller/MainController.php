<?php

namespace App\Controller;
use App\View\IndexView;

class MainController
{

	public function index()
	{
		return new IndexView();
	}
	
}