<?php

namespace App\Controllers;

use App\Models\Post;
use Core\View;

class Posts
{
	public function posts()
	{
		$obj = new Post();
		$data['posts'] = $obj->getPost();
		View::generate('post', $data);
	}
}
