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
if(isset($_POST['export_excel_all']))
{
	$query_run=mysql_query("SELECT * from `feedback_response` WHERE `subject`='MP' ORDER BY `username` asc"); //entire result
	if($query_run&&(mysql_num_rows($query_run)>0))
	{
		$output.= '<table  border="1" >
					<tr>
					<th>SAP_ID</th>
					<th>Subject</th>
					<th>Q1</th>
					<th>Q2</th>
					<th>Q3</th>
					<th>Q4</th>
					<th>Q5</th>
					<th>Average</th>
					</tr>
		';
		while($row=mysql_fetch_array($query_run))
		{
			$output.='
					<tr>
					<td>'.$row['username'].'</td>
					<td>'.$row['subject'].'</td>
					<td>'.$row['q1'].'</td>
					<td>'.$row['q2'].'</td>
					<td>'.$row['q3'].'</td>
					<td>'.$row['q4'].'</td>
					<td>'.$row['q5'].'</td>
					<td>'.$row['average'].'</td>
					</tr>
			';

		}
		$output.='</table>';


		//header("Content-Type: application/vnd.ms-excel");
        //header('Content-Disposition: attachment; filename="sample.xls"');
        

        $contents1 = "
    	<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">
    	<html>
        <head><meta http-equiv=\"Content-type\" content=\"text/html;charset=utf-8\" /></head>
        <body>";

		header("Content-Type:application/vnd.ms-excel");
		header("Content-Disposition:attachment;filename=download.xls");
		//header("Pragma:no-cache");
        //header("Expires: 0");
        $contents1 .= $output;
		$contents1 .= "</body></html>";
		echo $contents1;
/*
		$contents .= “</table>”;
$contents1 = “<html><head><meta http-equiv=\”Content-Type\” content=\”text/html; charset=utf-8\” /></head><body>”;
header(“Content-type: application/octet-stream”);//header(‘Content-type: application/ms-excel’);
header(‘Content-Disposition: attachment; filename=’.$filename);
header(“Pragma: no-cache”);
header(“Expires: 0″);
$contents1 .= $contents;
$contents1 .= “</body></html>”;
echo $contents1;
*/



	}
	else
		{//echo'<script type="text/javascript">alert("Querying failed(EXCEL)");</script>';
		echo mysql_error();
		}

	
}

?>
