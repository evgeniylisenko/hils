<?php 

namespace core;

class Router { 

	public $age;

public function setRouter($name) {

	 $this->router = $name;
}

public function run() { 

	return var_export($this->router);
}

}


?>