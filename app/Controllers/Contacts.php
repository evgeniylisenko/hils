<?php 

namespace App\Controllers;
use App\Models\Contacts;
use Core\View;

class Contacts
{

	 public function contacts() 
	 {
		   $obj = new Contacts();
		   $path = 'contacts';
			 $data['contacts'] = $obj->getAll();
			 View::generate($path, $data);
	 }

}