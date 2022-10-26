<?php

namespace Core\orm\common;

use Core\orm\common\Connector;
use Core\orm\common\Select;

class Insert
{
	private string $tableName;
	private array $column 	= [];
	private array $value	=	[];


	/**
	 * @return array
	 */
	public function getcolumn(): array
	{
		return $this->column;
	}

	/**
	 * @param array $column
	 */
	public function setcolumn(array $column)
	{
		$this->column = $column;
	}

	/**
	 * @return string
	 */
	public function getTableName(): string
	{
		return $this->tableName;
	}

	/**
	 * @param string $tableName
	 */
	public function setTableName(string $tableName)
	{
		$this->tableName = $tableName;
	}

	/**
	 * @return array
	 */
	public function getValue(): array
	{
		return $this->value;
	}

	/**
	 * @param array $value
	 */
	public function setValue(array $value)
	{
		$this->value = $value;
	}

	public  function  sql(array $fields, array $values): string
	{

		$result = '';
		foreach ($values as $value) {
			if (empty($result)) {
				$result = "'" . $value . "'";
			} else {
				$result .= ",'" . $value . "'";
			}
		}

		return 'INSERT INTO ' . $this->tableName . ' (' . implode(',', $fields)	.	') VALUES (' . $result . ')';
	}

	public function execute()
	{
		$connect = new Connector();
		$PDO = $connect->connect();
		return $PDO->query($this->sql($this->column, $this->value));
	}
}
