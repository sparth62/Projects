<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		body
		{
			/*background-color:#708099;*/
			background-color: #011627;
			text-align: center;
			font-family: 'Bitter', serif;
			border: 10px solid #2EC487;
			border-top: 0px;
			border-bottom: 0px;
			margin: 0px;
		}
		h1
			{
				background-color: #2EC487;
				font-family: 'Bitter', serif;
			}
		h2
			{
				background-color: #2EC487;
				font-family: 'Bitter', serif;
			}	
		input[type=button],input[type=submit],input[type=reset]
		{
			background-color: #2EC487;
			color: #011627;
		    padding: 16px 32px;
		    margin: 4px 2px;
		    width: 20%;
		    border: 3px solid black;
		    font-size : 30px;
		    width:50%; height: 80px; 
		    font-weight: bold;
		}	

		 hr.type_1 
		  {
                border:0;
                height: 60px;
           }
	</style>
</head>
<body>

	<h1>Welcome to Technothon!!!</h1>
	<h2>Information Technology</h2><hr class="type_1">

	<a href="form_final2.php"><input type="button" name="registration" value="Registration Form"></a>
	<a href="getinfo/info.php"><input type="button" name="info" value="Info Collector Form"></a>
	<a href="attendance/attendance_sheet.php"><input type="button" name="attendance" value="Attendance Sheet Generator"></a>
	<a href="search_receipt/search_receipt.php"><input type="button" name="search_receipt" value="Search Receipt"></a>

</body>
</html>