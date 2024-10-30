<?php
	
	session_start();
	
	require_once "$_SERVER[DOCUMENT_ROOT]/services/login.service.php";
	
	$user = Login($_POST['login'], $_POST['pass']);
	
	if ($user) {
		$_SESSION['user'] = $user;
		header('Location: /');
	}
	else header('Location: /login');