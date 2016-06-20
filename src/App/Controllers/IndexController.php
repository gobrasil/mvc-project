<?php

namespace App\Controllers;

use App\Models\Services\UserServices;
use App\Controllers\Controller;
use App\Views\IndexView as View;
use Respect\Validation\Validator as v;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class IndexController extends Controller
{	
	
	public function loadView($smarty_class)
	{
		return new View($smarty_class, $this);
	}
	
	public function login()
	{
		$info['name'] = $this->request['nick_name'];
		$info['email'] = $this->request['email'];
		$info['password'] = sha1($this->request['password']);
		$service = new UserServices();
		$service->login($info);		
	}
}