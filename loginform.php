<?php
	require 'connect.inc.php';

if(isset($_POST['username']) && isset($_POST['password']))  //are bot the fields entered by the user
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password))  
	// running query to find if the user has entered valid username and password 
	{
		$logpas = "SELECT `username`,`sem_no` FROM `student_teacher` WHERE `username`='$username' AND `password`='$password'";
	
		if($query_run = mysql_query($logpas))
		{
			if(mysql_num_rows($query_run) == 0)
              			echo '<script type="text/javascript">alert("Please enter valid a username and password");</script>';

			else if(mysql_num_rows($query_run) == 1)
			{
                                 if($username=='admin' && $password=='CEdjsce!')
			         {
					$admin = mysql_result($query_run, 0 ,'username');
					$_SESSION['admin'] = $admin;
					header("Location: view.php");	
				}
				else
				{
					session_start();
					$sapid = mysql_result($query_run, 0 ,'username');
					$_SESSION['username'] = $sapid;
					echo $_SESSION['username'];
					header("Location: subjects1.html");
				}
			}
		}	
	}
	else {
		echo '<script type="text/javascript">alert("Please the username and password");</script>';

	}
}
?>

<html>
	<head>

		<title>Course Exit-home</title>
		<link rel="stylesheet" type="text/css" href="mycourse.css">
	</head>
	<body>
		<div class="top_part">
			<h1>Course Exit <br>Form</h1>
		</div>
		<div >
			<fieldset>
				<form action="index.php" method="POST" style="text-align:left;">    
					<label for="username">USERNAME:</label><br>
					<input type="text" name="username"><br><br>

					<label for="password">PASSWORD:</label><br>
					<input type="password" name="password"><br>
					
					<input class="btn" type="submit" value="Login">
				</form>
			</fieldset>
		</form>
		</div>
	</body>
<html>
			