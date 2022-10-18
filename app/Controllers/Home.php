<?php 

namespace App\Controllers;
use App\Models\User;
use App\Models\Contact;
use Core\View;

class Home implements ControllerInterface
{

	 public function index() 
	 { 
			 $obj = new User;
		   $path = 'view';
			 $data['people'] = $obj->getAll();
			 View::generate($path, $data);

	 }

}