<?php

	require_once "$_SERVER[DOCUMENT_ROOT]/config.php";
	
	function userByLogin($login) {
		try {
			
			$userStmt = CONN->prepare("
        SELECT u.userID, u.login, r.role, u.avatar
        FROM users u
        JOIN roles r ON u.roleID = r.roleID
				WHERE u.login = :login
			");
			
			if ($userStmt->execute(['login' => $login])) {
				$user = $userStmt->fetch(PDO::FETCH_ASSOC);
				unset($user['password']);
				return $user;
			}
		} catch (PDOException $e) {
			throw new PDOException("Error returning user: " . $e->getMessage());
		}
		
		return false;
	}
	
	function isLogin(): bool
	{
		return isset($_SESSION['user']);
	}
	
	function isAdmin(): bool
	{
		return (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'ADMIN');
	}