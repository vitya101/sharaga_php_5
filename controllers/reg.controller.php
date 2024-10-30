<?php
	
	session_start();
	
	require_once "$_SERVER[DOCUMENT_ROOT]/services/reg.service.php";
	
	$user = Reg($_POST['login'], $_POST['pass']);
	
	if ($user) {
		$_SESSION['user'] = $user;
		header('Location: /');
	}
	else header('Location: /reg');