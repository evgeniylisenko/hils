<?php

namespace App\Models;

use Core\orm\common\Select;

class Post
{

	public function getPost(): array
	{

		$select	=	new Select();
		$select->setTableName('st_posts');
		$data = $select->execute();
		$posts = $data->fetchAll(\PDO::FETCH_ASSOC);
		

		return $posts;
	}
}
