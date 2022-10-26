<?php

namespace App\Models;

use Core\orm\common\Select;
use Core\orm\common\Insert;

class Articel
{

	public function getArticel(): array
	{

		$select	=	new Select();
		$select->setTableName('st_articels');
		$data = $select->execute();
		$articels = $data->fetchAll(\PDO::FETCH_ASSOC);

		return $articels;
	}

	public function getAdd(array $data): void
	{
		$objInsert = new Insert();
		$objInsert->setColumn(array_keys($data));
		$objInsert->setValue(array_values($data));
		$objInsert->setTableName('st_articels');
		$objInsert->execute();
	}
}
