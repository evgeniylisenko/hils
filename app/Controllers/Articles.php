<?php

namespace App\Controllers;

use App\Models\Articel;
use Core\View;

class Articles
{
	public function articles()
	{
		$obj = new Articel();
		$data['articels'] = $obj->getArticel();
		View::generate('articles', $data);
	}

	public function add()
	{
		
		$data = array_filter($_POST);
		var_dump($data);

		if (!empty($data)) {
			$obj = new Articel();
			$obj->getAdd($data);
		}


		View::generate('newpost', $data);

	}
}
