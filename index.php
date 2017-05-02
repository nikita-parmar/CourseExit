<?php
	require 'core.inc.php';
	require 'connect.inc.php';
	include 'loginform.php';
        
	if(loggedin()) //function in core.inc.php
	{		
		$role = getfield();
		selectsem($role);	 // in core.inc.php	
	}	

?>