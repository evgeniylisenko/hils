<?php 

namespace Core;
use App\Controllers\Error;

class Router { 

	private string $pathParts = ''; 
	private array $config = [];

	public function __construct()	{
			$this->pathParts = substr($_SERVER["REQUEST_URI"],1);

			$this->config = include_once (__DIR__) . '/../app/config/config.php';
	}

	public function run() { 
		if (array_key_exists($this->pathParts, $this->config)) { 
			$classPath = 'App\Controllers\\' . $this->getClassName();
		} else { 
			$objController = new Error;
		}

		// Если класс не существует выбрасываем Error
		if (class_exists($classPath)) { 
			$objController = new $classPath();
		} else { 
			$objController = new Error;
		}

		$methodName = $this->getMethodName();

		if (method_exists($objController, $methodName)) { 
			$objController->$methodName();
		} else { 
			(new Error)->index();
		}
	}

	private function getMethodName(): string { 
		$expmethod = explode(':', $this->config[$this->pathParts]);
					
		return  $expmethod[1];
	}

	private function getClassName(): string { 
		$exp = explode(':', $this->config[$this->pathParts]);

		return  $exp[0];
	}
}
