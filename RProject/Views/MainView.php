<?php
	namespace RProject\Views;

	class MainView{
		public static function render($file_name, $message = ''){
			include($file_name.'.php');
		}
	}
?>