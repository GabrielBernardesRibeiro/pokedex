<?php
	namespace RProject;
	class Application
	{
		private $controller;

		private function setApp(){
			$load_name = 'RProject\Controllers\\';
			$url = explode('/', @$_GET['url']);
			$file_path = __DIR__.'/Controllers/';

			if ($url[0] == '') {
				$load_name.='Home';
				$file_path.='Home';
			} else {
				$load_name.=ucfirst(strtolower($url[0]));
				$file_path.=ucfirst(strtolower($url[0]));;
			}

			$load_name.='Controller';
			$file_path.='Controller';

			if (file_exists($file_path.'.php')) {
				$this->controller = new $load_name();
			} else {
				include('Views/error_pages/404.php');
				die();
			}
			
		}

		public function run(){
			$this->setApp();
			$this->controller->index();
		}
	}
?>