<?php

namespace App\Controllers;

use App\Models\Services\UserServices;
use App\Controllers\Controller;
use App\Views\IndexView as View;
use Respect\Validation\Validator as v;
use App\Views\IndexView;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

class IndexController extends Controller
{	
	public function __construct(Array $request)
	{
		parent::__construct($request, $view);
		$this->view = new IndexView($this);
	}
	
	public function login(UserServices $user_services)
	{
		$info['name'] = $this->request['nick_name'];
		$info['email'] = $this->request['email'];
		$info['password'] = sha1($this->request['password']);
		$user_services->login($info);		
	}
}