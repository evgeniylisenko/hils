<?php

namespace App\Controllers;

use App\Models\Contact;
use Core\View;

class Contacts
{
	public function contacts()
	{
		$obj = new Contact();
		$data['rows'] = $obj->getContact();
		View::generate('contact', $data);
	}
}
