<?php
	date_default_timezone_set('America/Sao_Paulo');
	require('vendor/autoload.php');

	$app = new RProject\Application();
	$app->run();
?>