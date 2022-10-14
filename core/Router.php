<?php 

namespace Core;
use App\Controllers\Error;

class Router { 

	private array $pathParts = []; 
	private array $config = [];


	public function __construct()	{
			// Получаем URL	
			$path = substr($_SERVER["REQUEST_URI"],1);
			// Разбиваем URL на части
			$this->pathParts = explode("/", $path);
			$this->config = include_once (__DIR__) . '/../app/config/config.php';
	}

		public function run() { 

			var_dump($this->config);

				$classPath = 'App\Controllers\\' . $this->getClassName();

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

				if (empty($this->pathParts[1])) { 
					$methodName = 'index';	
				} else { 
					$methodName = $this->pathParts[1];
				}

				return $methodName;

			}

			

			private function getClassName(): string { 
			// проверяем наличие Controler Home
				if (empty($this->pathParts[0])) {
					$className = 'Home';
				} else { 
					$className = $this->pathParts[0];
				}
					return  ucfirst($className);

			}

			

}
