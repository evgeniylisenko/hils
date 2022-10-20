<?php

namespace App\Models;

use Core\orm\common\Select;

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
}
