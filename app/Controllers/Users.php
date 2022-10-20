<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class Users
{
	public function users()
	{
		$obj = new User();
		$data['users'] = $obj->getUser();
		View::generate('user', $data);
	}
}
