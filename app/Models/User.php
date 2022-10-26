<?php

namespace App\Models;

use Core\orm\common\Select;
use Core\orm\common\Insert;

class User
{

	public function getUsers(): array
	{

		$select	=	new Select();
		$select->setTableName('st_users');
		$data = $select->execute();
		$users = $data->fetchAll(\PDO::FETCH_ASSOC);
		

		return $users;
	}

	public function create(array $data): void 
	{
		$objInsert = new Insert();
		$objInsert->setColumn(array_keys($data));
		$objInsert->setValue(array_values($data));
		$objInsert->setTableName('st_users');
		$objInsert->execute();

	}

	public function auth($email, $password): bool
	{
		$objSelect = new Select();
		$objSelect->setWhere("email='" . $email . "' AND password = '" .$password . "'");
		$objSelect->setTableName('st_users');
		$data = $objSelect->execute();
		$result = $data->fetchAll(\PDO::FETCH_ASSOC);
		return !empty($result);

	}

}
