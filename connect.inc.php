<?php

	$mysql_host = "mysql.hostinger.in";
	$mysql_username = "u884103685_umnik"; 
	$mysql_password = "CEdjsce";
	$mysql_db = "u884103685_coext";
	$error_msg = "Could not connect";

	if( !@mysql_connect($mysql_host , $mysql_username , $mysql_password))
	{
		die($error_msg);
	}
	else if(!@mysql_select_db($mysql_db) )
		{
			die("wrong db");
		}

?>
