
<?php

ob_start();
session_start();
$currentfile = $_SERVER['SCRIPT_NAME'];
$httpreferer = $_SERVER['HTTP_REFERER']; //will tell us from which page have we come from

	function loggedin()
	{
		//user i logged in if the $_SESSION is set
		if(isset($_SESSION['username']) && !empty($_SESSION['username']))
			return true;
		return false;
	}

	function getfield()
	{
		$query = "SELECT `sem_no` FROM `student_teacher` WHERE `username` = '".$_SESSION['username']."' ";
		if($run_query = mysql_query($query)){
			if($query_result = mysql_result($run_query, 0)){
					return $query_result;
			}
		}		
	}

	function selectsem($role)
		{
			switch ($role)
			 {
					case 1:
						header("Location:subjects1.html");				
							break;

					case 2:
							header("Location:subjects2.html");				
							break;
					case 0:
							header("Location:faculty.html");
			}			
		}
?>