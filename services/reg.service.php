<?php
	
	/**
	 * @throws Exception
	 */
	
	require_once "$_SERVER[DOCUMENT_ROOT]/config.php";
	require_once "$_SERVER[DOCUMENT_ROOT]/services/role.service.php";
	require_once "$_SERVER[DOCUMENT_ROOT]/services/user.service.php";
	
	function Reg($login, $password, $role = 'VISITOR') {
		$password = password_hash($password, PASSWORD_DEFAULT);
		
		$roleID = getRoleID($role);
		
		if (!$roleID) throw new PDOException("Role not found");
		
		try {
			$userStmt = CONN->prepare("INSERT INTO users(login, password, roleID) VALUES(:login, :password, :roleID);");
			$userStmt->execute(['login'=> $login, 'password'=> $password, 'roleID'=> $roleID]);
		} catch (PDOException $e) {
			throw new PDOException("Error inserting user: " . $e->getMessage());
		}
		
		return userByLogin($login);
	}