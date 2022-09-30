<?php 

namespace Core;
use App\Controllers\Error;

class Router { 

	public $age;

public function setRouter($name) {

	 $this->router = $name;
}

public function run() { 

$str = substr($_SERVER["REQUEST_URI"],1);
$explode = explode("/", $str);

if (empty($explode [0])) { 
	$className = 'Home';
} else { 
	$className = $explode[0];
}

$classPath = 'App\Controllers\\' . $className;

if (class_exists($classPath)) { 
		$obj = new $classPath();
} else { 
	$obj = new Error;
}
$obj->index();

}
}
