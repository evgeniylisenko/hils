<?php

namespace App\Models;

use Core\orm\common\Select;
use Core\orm\common\Insert;

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

	public function contactFeedback(array $data): void
	{
		$objInsert = new Insert();
		$objInsert->setColumn(array_keys($data));
		$objInsert->setValue(array_values($data));
		$objInsert->setTableName('st_feedback');
		$objInsert->execute();
	}
}
