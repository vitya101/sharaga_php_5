<?php

require_once 'services/dbConnect.service.php';
require_once 'services/getFile.service.php';

if ($conn = conn()) define('CONN', $conn);
	const ROOT_DIR = 'C:/OSPanel/home/social-network.local';