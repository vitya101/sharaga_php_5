<?php
	
	// авторизация делится на идентификацию и авторизацию
	
	require_once "$_SERVER[DOCUMENT_ROOT]/config.php";
	require_once "$_SERVER[DOCUMENT_ROOT]/services/user.service.php";
function Identification($login) {
	
	$userStmt = CONN->prepare("SELECT * FROM users WHERE login = :login");
	$userStmt->execute(['login' => $login]);
	return $userStmt->fetch(PDO::FETCH_ASSOC);
}

function Login($login, $password) {
	
	$user = Identification($login);
	if (!$user) return false;
	
	if (password_verify($password, $user['password'])) return userByLogin($user['login']);
	
	return false;
}