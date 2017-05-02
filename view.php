	<html>
	<head>
        <link rel="stylesheet" type="text/css" href="mycourse.css">
	</head>	
	<body>

        <h3>Computer Networks</h3>
	<form action ="excel.php" method="POST">
		<input type="submit" class="btn" name="export_excel_all" value="CN Entire Table" style="margin-bottom:10px ;margin-left:10px">
		
		
	</form>
	<form action ="excel1.php" method="POST">
	<input type="submit" class="btn" name="export_excel_analysis" value="CN Analysis-A" style="margin-bottom:10px ;margin-left:10px">
		
	</form>
        <form action ="excel2.php" method="POST">
	<input type="submit" class="btn" name="export_excel_analysis" value="CN Analysis-B" style="margin-bottom:10px ;margin-left:10px">
		
	</form>
        <form action ="analysis_cn.php" method="POST">
	<input type="submit" class="btn" name="export_excel_analysis" value="CN Analysis-Entire Batch" style="margin-bottom:10px ;margin-left:10px">
		
	</form>
        
        



         <br>
          <br>
        <h3>Microprocessors</h3>
        <form action ="fullrecords_mp.php" method="POST">
		<input type="submit" class="btn" name="export_excel_all" value="MP Entire table " style="margin-bottom:10px ;margin-left:10px">
		
		
	</form>
	<form action ="analysis_mp.php" method="POST">
	<input type="submit" class="btn" name="export_excel_analysis" value="MP Analysis-Entire Batch" style="margin-bottom:10px ;margin-left:10px">
		
	</form>

          <br>
         <br>
        <h3>Operating Systems</h3>
       <form action ="fullrecords_os.php" method="POST">
		<input type="submit" class="btn" name="export_excel_all" value="OS Entire table" style="margin-bottom:10px ;margin-left:10px">
		
		
	</form>
	<form action ="analysis_os.php" method="POST">
	<input type="submit" class="btn" name="export_excel_analysis" value="OS Analysis-Entire Batch" style="margin-bottom:10px ;margin-left:10px">
		
	</form>
  
         <br>
         <br>
        <h3>System Object Oriented Analysis and Design</h3>
        <form action ="fullrecords_sooad.php" method="POST">
		<input type="submit" class="btn btn-default" name="export_excel_all" value="SOOAD Entire table" style="margin-bottom:10px ;margin-left:10px">
		
		
	</form>
	<form action ="analysis_sooad.php" method="POST">
	<input type="submit" class="btn btn-default" name="export_excel_analysis" value="SOOAD Analysis -Entire Batch" style="margin-bottom:10px ;margin-left:10px">
		
	</form>

         <br>
         <br>
        <h3>Web Technologies</h3>
        <form action ="fullrecords_wt.php" method="POST">
		<input type="submit" class="btn btn-default" name="export_excel_all" value="WT Entire table" style="margin-bottom:10px ;margin-left:10px">
		
		
	</form>
	<form action ="analysis_wt.php" method="POST">
	<input type="submit" class="btn btn-default" name="export_excel_analysis" value="WT Analysis - Entire Batch" style="margin-bottom:10px ;margin-left:10px">
		
	</form>
        
        <br>
         <br>
        <br>
        <br> 
         
        <form  action="logout.php" method="GET">
	     <input type="submit" class="btn1" value="LOGOUT">
        </form>	

	</body>
</html>			