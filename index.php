<?php
	session_start();

	
	//requires da aplicação
	require_once 'app/core/Core.php';
	require_once 'Lib/Radio/Database/Connection.php';
	require_once 'app/controller/IndexController.php';
	require_once 'app/model/adm.php';
	require_once 'vendor/autoload.php';

	//criando instancia do core
	$core = new Core;
	echo $core->start($_GET);
?>