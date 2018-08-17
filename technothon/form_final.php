<!DOCTYPE html>
<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="technothon";
	try	
	{
		$conn = mysqli_connect($servername, $username,$password,$dbname);
		echo("successful in connection");
	}
	catch(MySQLi_Sql_Exception $ex)
	{
		echo("error in connection");
	}
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="project.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
	<title>registration</title>
</head>

<body>
<h1>Welcome to Technothon!!!</h1>
<form action="" method="post">
<table align="center">
	<tr>
		<td><input type="text" name="rollno1" placeholder="Enter rollno"></td>
		<td><input type="submit" name="getdata" value="Getdata"></td>
	</tr>
</table>
</form>
	<?php
			if(isset($_POST['getdata']))
			{
				$rollno1 = $_POST['rollno1'];
				$sql1 = "SELECT * FROM info WHERE rollno='$rollno1'";
				$rec1=mysqli_query($conn,$sql1);
				$result = mysqli_fetch_assoc($rec1);
				echo '<form action="" method="post">';
					echo '<table align="center">';
						echo '<tr>';
							echo '<td align="left">Roll no</td>';
							echo '<td><input type="text" name="rollno" value="'.$result['rollno'].'"></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td align="left">Name</td>';
							echo '<td><input type="text" name="sname"  value="'.$result['name'].'"></td>';
						echo '</tr>';
						echo '<tr>';
							echo '<td align="left">Branch Name</td>';
							echo '<td>';
								echo '<select name="branch" style="width: 175px;">';
									echo '<option value="-1">Select branch</option>' ;   
									echo '<option value="it"';if ('it' == $result['branch']) echo ' selected';
									echo '>Information & Technology</option>' ; 
									echo '<option value="ce"';if ('ce' == $result['branch']) echo ' selected';
									echo '>Computer</option>' ; 
									echo '<option value="ec"';if ('ec' == $result['branch']) echo ' selected';
									echo '>Electronics & communication</option>' ; 
									echo '<option value="ee"';if ('ee' == $result['branch']) echo ' selected';
									echo '>Electricle</option>' ;
									echo '<option value="me"';if ('me' == $result['branch']) echo ' selected';
									echo '>Mechanical</option>' ;
									echo '<option value="civil"';if ('civil' == $result['branch']) echo ' selected';
									echo '>Civil</option>' ;
									echo '<option value="ch"';if ('ch' == $result['branch']) echo ' selected';
									echo '>Chemical</option>' ;
									echo '<option value="nt"';if ('nt' == $result['branch']) echo ' selected';
									echo '>Nano Technology</option>' ;
									echo '<option value="bt"';if ('bt' == $result['branch']) echo ' selected';
									echo '>Bio Technology</option>' ;
								echo '</select>';
							echo '</td>';
						echo '<tr>';
						echo '<tr>';
							echo '<td align="left">Semester</td>';
							echo '<td align="left">';
								echo '<select name="sem" >  ' ;
									echo '<option value="1"'; if (1 == $result['sem']) echo ' selected';
									echo '>1</option>';  
									echo '<option value="3"'; if (3 == $result['sem']) echo ' selected';
									echo '>3</option>';  
									echo '<option value="5"'; if (5 == $result['sem']) echo ' selected';
									echo '>5</option>';  
									echo '<option value="7"'; if (7 == $result['sem']) echo ' selected';
									echo '>7</option>';  
								echo '</select>';
							echo '</td>';
						echo '</tr>';						
						echo '<tr>';
							echo '<td align="left">Mail id</td>';
							echo '<td><input type="text" name="email"  value="'.$result['email'].'"></td>';
						echo '</tr>';
						echo '<tr>';
					    	echo '<td align="left">Mobile no</td>';
					    	echo '<td><input type="text" name="contact"  value="'.$result['contact'].'"></td>';
						echo '</tr>	';
					echo '</table>';
					echo '<hr color="#2EC487" size="10">';
					echo '<h2 align="center">Events</h2>';
					echo '<table align="center" cellpadding="1" cellspacing="1" border="0%">';

					echo '<tr align="left">';
						echo '<td>Lan Gaming</td>';
						echo '<td class="main">	';	
							echo '<input type="radio" name="lan" value="yes">yes';
							echo '<input type="radio" name="lan" value="no" checked>no';
							echo '&nbsp;&nbsp;<input type="text" name="lanid" value="lg">';
						echo '</td>';
						echo '<td>';
							echo 'Poster Presentation';
						echo '</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="poster" value="yes">yes';
							echo '<input type="radio" name="poster" value="no" checked>no';
							echo '&nbsp;&nbsp;<input type="text" name="posterid" value="pp">';
						echo '</td>';
					echo '</tr>';
					echo '<tr align="left">';
						echo '<td>CodeJam</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="codejam" value="yes">yes';
							echo '<input type="radio" name="codejam" value="no" checked>no';
						echo '</td>';
						echo '<td>Web Craft</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="web" value="yes">yes';
							echo '<input type="radio" name="web" value="no" checked>no';
						echo '</td>';
					echo '</tr>';
					echo '<tr align="left">';
						echo '<td>Picasso</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="picasso" value="yes">yes';
							echo '<input type="radio" name="picasso" value="no" checked>no';
						echo '</td>';
						echo '<td>One Minute Video</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="video" value="yes">yes';
							echo '<input type="radio" name="video" value="no" checked>no';
						echo '</td>';
					echo '</tr>';
				echo '</table>';
				echo '<br>';
				echo '<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;';
				echo '<input type="button" name="update" value="Update">&nbsp;&nbsp;';
				echo '<input type="reset" name="reset" value="Reset">';
				}
	?>
<?php
	if(isset($_POST['submit'])){
				$rollno = $_POST['rollno'];
				$name = $_POST['sname'];
				$branch = $_POST['branch'];
				$sem = $_POST['sem'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$sql = "INSERT INTO `s_info`(`rollno`, `name`, `branch`, `sem`, `email`, `contact`) VALUES ('$rollno','$name','$branch',$sem,'$email','$contact');";
				$lan=$_POST['lan'];
				$lanid=$_POST['lanid'];
				$poster=$_POST['poster'];
				$posterid=$_POST['posterid'];
				$codejam=$_POST['codejam'];
				$web=$_POST['web'];
				$picasso=$_POST['picasso'];
				$video=$_POST['video'];

				$sql .= "INSERT INTO `e_info`(`rollno`, `lan`, `lanid`, `poster`, `posterid`, `codejam`, `web`, `picasso`, `video`) VALUES ('$rollno','$lan','$lanid','$poster','$posterid','$codejam','$web','$picasso','$video')";

				if ($conn->multi_query($sql) === TRUE) {
    				echo "New records created successfully";
				} else {
    				echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
?>
</form>
</body>
</html>