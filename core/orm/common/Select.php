<?php

namespace Core\orm\common;

use Core\orm\common\Connector;

class Select
{

	protected	$tableName;
	protected	$columns = '*';
	protected $where = '';

	public function getTableName()
	{
		return $this->tableName;
	}

	public function setTableName($tableName): void
	{
		$this->tableName	=	$tableName;
	}

	public function setWhere($where): void 
	{
		$this->where = $where;
	}

	public function getColumns()
	{
		$this->columns;
	}

	public function getWhere()
	{
		$this->where;
	}

	public function setColumns($columns): void
	{
		$this->columns = $columns;
	}

	public function getSQL(): string
	{
		$sql = 'SELECT ' . $this->columns	.	' FROM ' . $this->tableName;
		if(!empty($this->where)) { 
			$sql .= ' WHERE ' . $this->where;
		} 
		return $sql;
	}

	public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->getSQL());
	}
}
