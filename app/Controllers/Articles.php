<?php 

namespace App\Controllers;
use App\Models\Articel;
use Core\View;

class Articles {
	public function articles() {
		$obj = new Articel();
		$data['articels'] = $obj->getArticel();
		View::generate('articles', $data);
	}
}