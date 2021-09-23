<?php

	define('_HOST_NAME', 'localhost');
	define('_DATABASE_USER_NAME','root');
	define('_DATABASE_PASSWORD','');
	define('_DATABASE_NAME','lab06_a');

	$MySQLiconn = new MySQLi(_HOST_NAME,
		_DATABASE_USER_NAME,_DATABASE_PASSWORD,
		_DATABASE_NAME);
	if($MySQLiconn->connect_errno)
	{
		die("Error:->".$MySQLiconn->connect_error);
	}



