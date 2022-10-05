<?php 

namespace App\Controllers;

class Home implements ControllerInterface
{

	 public function index() { 

			 var_dump('Домашння страница');

	 }

	 public function contact() { 

		var_dump('Форма отправки данных');

	 }

}