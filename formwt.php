<?php

    require 'connect.inc.php';
	session_start();
	$username = $_SESSION['username'];
	$subject = 'WT';

	if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']))
	{	
		$q1=$_POST['q1'];
		$q2=$_POST['q2'];
		$q3=$_POST['q3'];
		$q4=$_POST['q4'];
		$q5=$_POST['q5'];

		if(!empty($q1) && !empty($q2) && !empty($q3) && !empty($q4) && !empty($q5))
		{
			$average=($q1+$q2+$q3+$q4+$q5)/5;

            $query = "INSERT INTO `feedback_response` (`username`, `subject`, `q1`, `q2`, `q3`, `q4`, `q5`, `average`) VALUES ('$username', '$subject', '$q1', '$q2', '$q3', '$q4', '$q5', '$average')";


			if(mysql_query($query))
			{
					echo '<script type="text/javascript">alert("Congratulations, you have successfully submitted this form!");</script>';		
			        header('Location:subjects1.html');
            }
			else
			{
				echo '<script type="text/javascript">alert("Sorry some error has occured");</script>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width,initial-scale=1.0">
  		<link rel="stylesheet" type="text/css" href="mycourse.css">
	</head>

	<script type="text/javascript">
		function validateForm() {

		    if ( (q_and_o.q1[0].checked==false && q_and_o.q1[1].checked==false &&q_and_o.q1[2].checked==false &&q_and_o.q1[3].checked==false &&q_and_o.q1[4].checked==false) || (q_and_o.q2[0].checked==false && q_and_o.q2[1].checked==false &&q_and_o.q2[2].checked==false &&q_and_o.q2[3].checked==false &&q_and_o.q2[4].checked==false) || (q_and_o.q3[0].checked==false && q_and_o.q3[1].checked==false &&q_and_o.q3[2].checked==false &&q_and_o.q3[3].checked==false &&q_and_o.q3[4].checked==false) || (q_and_o.q4[0].checked==false && q_and_o.q4[1].checked==false &&q_and_o.q4[2].checked==false &&q_and_o.q4[3].checked==false &&q_and_o.q4[4].checked==false) || (q_and_o.q5[0].checked==false && q_and_o.q5[1].checked==false &&q_and_o.q5[2].checked==false &&q_and_o.q5[3].checked==false && q_and_o.q5[4].checked==false))
		    	{
		        	alert("Please answer all the questions");
		        	return false;
		    	}
		    	else
		    		return true;
		}
	</script>
	<body>
		<form name="q_and_o" onsubmit="return validateForm()" method="POST">
			<div class="question">Q1 WT</div>
		    
		    <div class="allOptions">
			  
			       	<input type="radio" name="q1" id="q1op1" value="1">
			       	<label for="q1op1">1</label>
			  
     				<input type="radio" name="q1" id="q1op2" value="2">
			       	<label for="q1op2">2</label>
			  
			  		<input type="radio" name="q1" id="q1op3" value="3">
			       	<label for="q1op3">3</label>
			  
			  		<input type="radio" name="q1" id="q1op4" value="4">
			       	<label for="q1op4">4</label>
			  
			  		<input type="radio" name="q1" id="q1op5" value="5">
			       	<label for="q1op5">5</label>
			  
			  </div>

			<div class="question">Q2 WT</div>
		    
		    <div class="allOptions">
			  
			       	<input type="radio" name="q2" id="q2op1" value="1">
			       	<label for="q2op1">1</label>
			  
			      	<input type="radio" name="q2" id="q2op2" value="2">
			       	<label for="q2op2">2</label>
			  
			      	<input type="radio" name="q2" id="q2op3" value="3">
			       	<label for="q2op3">3</label>
			  
			      	<input type="radio" name="q2" id="q2op4" value="4">
			       	<label for="q2op4">4</label>
			  
			      	<input type="radio" name="q2" id="q2op5" value="5">
			       	<label for="q2op5">5</label>
			  
			  </div>

  			<div class="question">Q3 WT</div>
		    
		    <div class="allOptions">
			  
			       	<input type="radio" name="q3" id="q3op1" value="1">
			       	<label for="q3op1">1</label>
			  
     				<input type="radio" name="q3" id="q3op2" value="2">
			       	<label for="q3op2">2</label>
			  
			  		<input type="radio" name="q3" id="q3op3" value="3">
			       	<label for="q3op3">3</label>
			  
			  		<input type="radio" name="q3" id="q3op4" value="4">
			       	<label for="q3op4">4</label>
			  
			  		<input type="radio" name="q3" id="q3op5" value="5">
			       	<label for="q3op5">5</label>
			  
			  </div>


  			<div class="question">Q4 WT</div>
		    
		    <div class="allOptions">
			  
			       	<input type="radio" name="q4" id="q4op1" value="1">
			       	<label for="q4op1">1</label>
			  
     				<input type="radio" name="q4" id="q4op2" value="2">
			       	<label for="q4op2">2</label>
			  
			  		<input type="radio" name="q4" id="q4op3" value="3">
			       	<label for="q4op3">3</label>
			  
			  		<input type="radio" name="q4" id="q4op4" value="4">
			       	<label for="q4op4">4</label>
			  
			  		<input type="radio" name="q4" id="q4op5" value="5">
			       	<label for="q4op5">5</label>
			  
			  </div>

  			<div class="question">Q5 WT</div>
		    
		    <div class="allOptions">
			  
			       	<input type="radio" name="q5" id="q5op1" value="1">
			       	<label for="q5op1">1</label>
			  
     				<input type="radio" name="q5" id="q5op2" value="2">
			       	<label for="q5op2">2</label>
			  
			  		<input type="radio" name="q5" id="q5op3" value="3">
			       	<label for="q5op3">3</label>
			  
			  		<input type="radio" name="q5" id="q5op4" value="4">
			       	<label for="q5op4">4</label>
			  
			  		<input type="radio" name="q5" id="q5op5" value="5">
			       	<label for="q5op5">5</label>
			  
			  </div>
			  <input type="submit" class="btn btn-default" name="submitButton" value="Submit" style="margin-top:30px ;margin-left:40px">
		</form>
	        
    <form  action="logout.php" method="GET">
      <input type="submit" class="btn btn-default" name="logout" value="Logout" style="margin-top:10px ;margin-left:40px">
    </form>	
	</body>	
</html>

