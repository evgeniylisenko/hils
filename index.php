<?php 
		require './vendor/autoload.php';
		use Core\Router;

$obj = new Router();

$obj->setRouter([
	"john" => "18",
	"lisa" => "28",
	"maks" => "21",
]);
print_r('<br />');
$obj->run();