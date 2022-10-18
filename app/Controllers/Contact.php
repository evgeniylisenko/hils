<?php 

namespace App\Controllers;
use App\Models\Contact;
use Core\View;

class Contacts
{

	 public function indexOne() 
	 {
			 $obj = new Contacts;
		   $path = 'contacts';
			 $data['contact'] = $obj->getAll();
			 View::generate($path, $data);
	 }

}