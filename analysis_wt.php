<?php

$mysql_host='mysql.hostinger.in';
$mysql_user='u884103685_umnik';
$mysql_pass='CEdjsce';
$mysql_db='u884103685_coext';
$output='';

if($connect=@mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
	if($connect_db=@mysql_select_db($mysql_db))
	{
		//echo '<script type="text/javascript">alert("Exporting to Excel");</script>';
	}
	//else
		//echo '<script type=text/javascript">alert("Exporting to excel not possible");</script>';
}
if(isset($_POST['export_excel_analysis']))
{
		$output.= '<table  border="1" >
					<tr>
					<th>Questions</th>
					<th>Mark=1</th>
					<th>Mark=2</th>
					<th>Mark=3</th>
					<th>Mark=4</th>
					<th>Mark=5</th>
					<th>Weighted</th>
					<th>Score</th>
					</tr>
		';
		
		for ($i = 1; $i <= 5; $i++) 
		{
			$output.='
					<tr>
					<td>'.'Q'.$i.'</td>';

			if($i==1)
				$q="q1";
			elseif($i==2)
				$q="q2";
			elseif($i==3)
				$q="q3";
			elseif($i==4)
				$q="q4";
			else
				$q="q5";
			$weighted=0.0;


                $query_total =  "SELECT COUNT(*) FROM `feedback_response` WHERE `subject`='WT' ";
                $total_result =  mysql_fetch_array(mysql_query($query_total));     		
                $total = $total_result['COUNT(*)'];

                for ($j = 1; $j <= 5; $j++)   //marks
		{
    		$query="SELECT COUNT(*) FROM `feedback_response` WHERE `".$q."` ='$j' AND `subject`='WT' ";
    	        
    		$query_result = mysql_fetch_assoc(mysql_query($query));
    		

    		$temp=$query_result['COUNT(*)'];
                $final = (float)floatval($temp*100)/($total);

                $output.='<td>'.$final.'</td>';	

    		$weighted = $weighted + $final*$j;

		}	
			$weighted=($weighted)/5.0;
			if($weighted>=80)
				$score=3;
			else if($weighted>=70)
				$score=2;
			else if($weighted>=60)
				$score=1;
			else
			$score=0; 

			$output.='<td>'.(float)floatval($weighted).'</td>';	
			$output.='<td>'.(float)floatval($score).'</td>';	

			$output.='</tr>';

		} 
		$output.='</table>';
        

        $contents1 = "
    	<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">
    	<html>
        <head><meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\" /></head>
        <body>";

		header("Content-Type:application/vnd.ms-excel");
		header("Content-Disposition:attachment;filename=analysis.xls");
        $contents1 .= $output;
		$contents1 .= "</body></html>";
		echo $contents1;



	
}



?>