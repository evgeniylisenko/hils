<?php

namespace App\Controllers;

use App\Models\Contact;
use Core\View;

class Contacts
{
	public function contacts()
	{
		$result = array_filter($_POST);

		if (!empty($result)) {
			$obj = new Contact();
			$obj->contactFeedback($result);
		}

		$obj = new Contact();
		$data['rows'] = $obj->getContact();
		View::generate('contact', $data);
	}
}
