<?php

namespace App\Controllers;

use App\Models\Services\UserServices;
use App\Controllers\Controller;
use App\Models\Security\Traits\Validation;
use App\Views\IndexView as View;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class IndexController extends Controller
{
	
	use Validation;
	
	public function loadView()
	{
		return new View(new \Smarty(), $this);
	}
	
	public function login()
	{
		$info['name'] = $this->name($this->request['nick_name']);
		$info['email'] = $this->email($this->request['email']);
		$info['password'] = sha1($this->request['password']);
		$service = new UserServices();
		$service->login($info);
	}
	
}