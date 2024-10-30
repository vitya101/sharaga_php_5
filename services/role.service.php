<?php
	
	require_once "$_SERVER[DOCUMENT_ROOT]/config.php";
	
	function getRoleID($role)
	{
		$roleIDStmt = CONN->prepare("SELECT roleID FROM roles WHERE role = :role");
		$roleIDStmt->execute(['role' => $role]);
		return $roleIDStmt->fetchColumn();
	}