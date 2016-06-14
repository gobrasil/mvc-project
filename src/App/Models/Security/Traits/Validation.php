<?php

namespace App\Models\Security\Traits;

/**
 * @link https://github.com/gabrielomelo
 * @author Gabriel Melo <dev.gabrielomelo@gmail.com>
 */

trait Validation
{
	
	public function email(string $email)
	{
		if (strlen($email) < 5 || !preg_match('/@/', $email)) {
			return false;
		}
		return $email;
	}
	
	public function name(string $name)
	{
		if (strlen($name) > 8 || strlen($name) < 3) {
			return false;
		}
		return $name;
	}
	
}