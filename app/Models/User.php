<?php

namespace App\Models;

use Core\orm\common\Select;

class User
{

	public function getUser(): array
	{

		$select	=	new Select();
		$select->setTableName('st_users');
		$data = $select->execute();
		$users = $data->fetchAll(\PDO::FETCH_ASSOC);
		

		return $users;
	}
}
