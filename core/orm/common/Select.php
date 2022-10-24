<?php

namespace Core\orm\common;

use Core\orm\common\Connector;

class Select
{

	protected	$tableName;
	protected	$columns = '*';

	public function getTableName()
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void
	{
		$this->tableName	=	$tableName;
	}

	public function getColumns()
	{
		$this->columns;
	}

	public function setColumns($columns): void
	{
		$this->columns = $columns;
	}

	public function getSQL(): string
	{
		return 'SELECT ' . $this->columns	.	' FROM ' . $this->tableName;
	}

	public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->getSQL());
	}
}
