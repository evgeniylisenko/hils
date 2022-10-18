<?php 

namespace App\Controllers;
use App\Models\User;
use App\Models\Contacts;
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

	 public function contacts() 
	 {
			 $obj = new Contacts();
		   $path = 'contacts';
			 $data['contacts'] = $obj->getAll();
			 View::generate($path, $data);
	 }


}