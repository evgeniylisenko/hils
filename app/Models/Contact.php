<?php

namespace App\Models;

use Core\orm\common\Select;

class Contact
{

	public function getContact(): array
	{

		$select = new Select();
		$select->setTableName('st_contact');
		$data = $select->execute();
		$rows = $data->fetchAll(\PDO::FETCH_ASSOC);

		return	$rows;
	}
}
