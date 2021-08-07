<?php 
	namespace RProject\Controllers;
	class HomeController{
		public function index(){
				
			\RProject\Views\MainView::render('home');
		}
	}
?>