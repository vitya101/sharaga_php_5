<?php
	function getFile($name): bool|string
	{
		ob_start();
		include $name;
		return ob_get_clean();
	}