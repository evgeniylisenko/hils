<?php 

namespace App\Controllers;
use App\Models\Contact;
use Core\View;

class Contact
{

	 public function indexOne() 
	 {
			 $obj = new Contact;
		   $path = 'contacts';
			 $data['contact'] = $obj->getAll();
			 View::generate($path, $data);
	 }

}