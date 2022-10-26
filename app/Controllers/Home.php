<?php 

namespace App\Controllers;
use App\Models\User;
use Core\View;

class Home implements ControllerInterface
{

	 public function index() 
	 { 
			 $obj = new User;
			 $data['people'] = $obj->getUsers();
			 View::generate('home', $data);

	 }
}