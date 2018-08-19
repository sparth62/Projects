<!DOCTYPE html>
<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="technothon";
	try	
	{
		$conn = mysqli_connect($servername, $username,$password,$dbname);
		
	}
	catch(MySQLi_Sql_Exception $ex)
	{
		echo("error in connection");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Receipt</title>
</head>
<body>
	<center>
		<h1>Search Receipt</h1>
	<form action="" method="post">
		<div style="font-size: 14px;"><b>
		<input type="text" name="rollno">
		<input type="submit" name="submit" value="Get_receipt">
	</b></div>
	
	<?php
		if(isset($_POST['submit']))
		{
			$rollno=$_POST['rollno'];
			echo '<img src="../receipt/images/'.$rollno.'.png">';
		}
	?>
	</form>
	</center>
</body>
</html>