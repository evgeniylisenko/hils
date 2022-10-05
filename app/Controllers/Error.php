<?php 

namespace App\Controllers;

class Error implements ControllerInterface
{

	 public function index() { 

			 var_dump('Ошибка 404! Данная страница не существует.');

	 }

}