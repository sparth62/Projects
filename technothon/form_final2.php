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
				$sql1 = "SELECT * FROM s_info WHERE rollno='$rollno1';";
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
					$sql1 = "SELECT * FROM e_info WHERE rollno='$rollno1';";
					$rec1=mysqli_query($conn,$sql1);
					$result = mysqli_fetch_assoc($rec1);
					echo '<tr align="left">';
						echo '<td>Lan Gaming</td>';
						echo '<td class="main">	';	
							echo '<input type="radio" name="lan" value="yes"';if ('yes' == $result['lan']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="lan" value="no"';if ('yes' != $result['lan']) echo ' checked';
							echo '>no';
							echo '<input type="radio" name="lan2" value="pubg"';if ('cs' != $result['lan2']) echo ' checked';
							echo '>PUBG';
							echo '<input type="radio" name="lan2" value="cs"';if ('cs' == $result['lan2']) echo ' checked';
							echo '>CS';
							echo '&nbsp;&nbsp;<input type="text" name="lanid" value="';if ('yes' == $result['lan'])
							{echo $result['lanid'];}
							else {if('pubg'==$result['lan2']){echo $result['lanid'];} 
								elseif('cs'==$result['lan2']){echo $result['lanid'];} else {echo 'pubg';}}
							echo '">';
						echo '</td>';
						echo '<td>';
							echo 'Poster Presentation';
						echo '</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="poster" value="yes"';if ('yes' == $result['poster']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="poster" value="no"';if ('yes' != $result['poster']) echo ' checked';
							echo '>no';
							echo '&nbsp;&nbsp;<input type="text" name="posterid" value="';if ('yes' == $result['poster']){echo $result['posterid'];} else {echo 'pp';}
							echo '">';
						echo '</td>';
					echo '</tr>';
					echo '<tr align="left">';
						echo '<td>CodeJam</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="codejam" value="yes"';if ('yes' == $result['codejam']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="codejam" value="no"';if ('yes' != $result['codejam']) echo ' checked';
							echo '>no';
						echo '</td>';
						echo '<td>Web Craft</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="web" value="yes"';if ('yes' == $result['web']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="web" value="no"';if ('yes' != $result['web']) echo ' checked';
							echo '>no';
						echo '</td>';
					echo '</tr>';
					echo '<tr align="left">';
						echo '<td>Picasso</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="picasso" value="yes"';if ('yes' == $result['picasso']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="picasso" value="no"';if ('yes' != $result['picasso']) echo ' checked';
							echo '>no&nbsp;&nbsp;&nbsp;';
							echo '<input type="radio" name="picasso2" value="laptop"';if ('pc' != $result['picasso2']) echo ' checked';
							echo '>Laptop';
							echo '<input type="radio" name="picasso2" value="pc"';if ('pc' == $result['picasso2']) echo ' checked';
							echo '>PC';
							/*echo '&nbsp;&nbsp;<input type="text" name="picassoid" value="';if ('yes' == $result['picasso']){echo $result['picassoid'];} else {echo 'pic';}
							echo '">';*/
						echo '</td>';

						echo '<td>One Minute Video</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="video" value="yes"';if ('yes' == $result['video']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="video" value="no"';if ('yes' != $result['video']) echo ' checked';
							echo '>no';
							echo '&nbsp;&nbsp;<input type="text" name="videoid" value="';if ('yes' == $result['video']){echo $result['videoid'];} else {echo 'v';}
							echo '">';
						echo '</td>';
					echo '</tr>';
					echo '<tr align="left">';
						echo '<td>Chal beta Selfie...</td>';
						echo '<td class="main">';
							echo '<input type="radio" name="selfie" value="yes"';if ('yes' == $result['selfie']) echo ' checked';
							echo '>yes';
							echo '<input type="radio" name="selfie" value="no"';if ('yes' != $result['selfie']) echo ' checked';
							echo '>no&nbsp;&nbsp;&nbsp;';
							echo '<input type="radio" name="user" value="parth"';if ('parth' == $result['user']) echo ' checked';
							echo '>Parth';
							echo '<input type="radio" name="user" value="mohit"';if ('mohit' == $result['user']) echo ' checked';
							echo '>Mohit';
						echo '</td>';
					echo '</tr>';
				echo '</table>';
				echo '<br>';
				//echo '<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;';
				echo '<input type="submit" name="update" value="Update">&nbsp;&nbsp;';
				echo '<input type="reset" name="reset" value="Reset">';
				}
	?>
	
<?php
	/*if(isset($_POST['submit'])){
				$rollno = $_POST['rollno'];
				$name = $_POST['sname'];
				$branch = $_POST['branch'];
				$sem = $_POST['sem'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$lanid=$_POST['lanid'];
				//$sql = "INSERT INTO `s_info`(`rollno`, `name`, `branch`, `sem`, `email`, `contact`) VALUES ('$rollno','$name','$branch',$sem,'$email','$contact');";
				$lan=$_POST['lan'];
				
				
				$poster=$_POST['poster'];
				$posterid=$_POST['posterid'];
				$codejam=$_POST['codejam'];
				$web=$_POST['web'];
				$picasso=$_POST['picasso'];
				$picasso2=$_POST['picasso2'];
				$picassoid=$_POST['picassoid'];
				$video=$_POST['video'];
				$videoid=$_POST['videoid'];
				$selfie=$_POST['selfie'];
				$sql= "INSERT INTO `e_info`(`rollno`, `lan`, `lanid`, `poster`, `posterid`, `codejam`, `web`, `picasso`, `picasso2`, `picassoid`, `video`,`videoid`,`selfie`) VALUES ('$rollno','$lan','$lanid','$poster','$posterid','$codejam','$web','$picasso','$picasso2','$picassoid','$video','$videoid','$selfie')";

				if ($conn->multi_query($sql) === TRUE) {
    				echo "New records created successfully";
				
			}
		}*/
	if(isset($_POST['update'])){
				$rollno = $_POST['rollno'];
				$name = $_POST['sname'];
				$branch = $_POST['branch'];
				$sem = $_POST['sem'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$lan=$_POST['lan'];
				$lan2=$_POST['lan2'];
				$lanid=$_POST['lanid'];
				$poster=$_POST['poster'];
				$posterid=$_POST['posterid'];
				$codejam=$_POST['codejam'];
				$web=$_POST['web'];
				$picasso=$_POST['picasso'];
				$picasso2=$_POST['picasso2'];
				//$picassoid=$_POST['picassoid'];
				$video=$_POST['video'];
				$videoid=$_POST['videoid'];
				$selfie=$_POST['selfie'];
				$user=$_POST['user'];
				$date=12;

				$sql0 ="SELECT COUNT(*) FROM e_info WHERE rollno='$rollno';";
					$rec1=mysqli_query($conn,$sql0);
					$row = mysqli_fetch_row($rec1);
					$count = $row[0];
				if($count==0)
				{
					$sql="INSERT INTO `e_info`(`rollno`,`date`,`lan`,`lan2`, `lanid`, `poster`, `posterid`, `codejam`, `web`, `picasso`, `picasso2`, `video`, `videoid`, `selfie`,`user`) VALUES ('$rollno',$date,'no','pubg','pubg','no','pp','no','no','no','laptop','no','v','no','$user');";	
				}
				else
				{
					$sql="UPDATE `e_info` SET `date`=$date,`user`='$user' WHERE rollno='$rollno';";
				}

				$sql .="UPDATE `s_info` SET `rollno`='$rollno',`name`='$name',`branch`='$branch',`sem`='$sem',`email`='$email',`contact`='$contact' WHERE rollno='$rollno';";

				if($lan=='yes')
				{
					if($lan2=='cs')
					{
						$sql1 ="SELECT COUNT(*) FROM e_info WHERE lanid='$lanid';";
						$rec1=mysqli_query($conn,$sql1);
						$row = mysqli_fetch_row($rec1);
						$lgcount = $row[0];
					
						if($lgcount>2)
						{	
    						echo "<script type='text/javascript'>alert('Counter Strike team already have 3 participents');</script>";
    						$sql .="UPDATE `e_info` SET `lanid`='pubg' WHERE rollno='$rollno';";
						}
						else
						{
							$sql .="UPDATE `e_info` SET `lan`='$lan',`lan2`='$lan2',`lanid`='$lanid' WHERE rollno='$rollno';";
						}	
					}
					if($lan2=='pubg')
					{
						$sql1 ="SELECT COUNT(*) FROM e_info WHERE lanid='$lanid';";
						$rec1=mysqli_query($conn,$sql1);
						$row = mysqli_fetch_row($rec1);
						$lgcount = $row[0];
					
						if($lgcount>3)
						{	
    						echo "<script type='text/javascript'>alert('PUBG team already have 4 participents');</script>";
    						$sql .="UPDATE `e_info` SET `lanid`='pubg' WHERE rollno='$rollno';";
						}
						else
						{
							$sql .="UPDATE `e_info` SET `lan`='$lan',`lan2`='$lan2',`lanid`='$lanid' WHERE rollno='$rollno';";
						}	
					}
					
				}
				elseif($lan=='no')
				{
					$sql .="UPDATE `e_info` SET `lan`='$lan',`lan2`='$lan2',`lanid`='$lanid' WHERE rollno='$rollno';";
				}

				if($poster=='yes')
				{
					$sql1 ="SELECT COUNT(*) FROM e_info WHERE posterid='$posterid';";
					$rec1=mysqli_query($conn,$sql1);
					$row = mysqli_fetch_row($rec1);
					$ppcount = $row[0];
					
					if($ppcount>1)
					{	
    					echo "<script type='text/javascript'>alert('Poster Presentation team already have 2 participents');</script>";
					}
					else
					{
						$sql .="UPDATE `e_info` SET `poster`='$poster',`posterid`='$posterid' WHERE rollno='$rollno';";
					}
				}
				elseif($poster=='no')
				{
					$sql .="UPDATE `e_info` SET `poster`='$poster',`posterid`='$posterid' WHERE rollno='$rollno';";
				}

				if($picasso=='yes')
				{
					/*$sql1 ="SELECT COUNT(*) FROM e_info WHERE picassoid='$picassoid';";
					$rec1=mysqli_query($conn,$sql1);
					$row = mysqli_fetch_row($rec1);
					$piccount = $row[0];
					
					if($piccount>1)
					{	
    					echo "<script type='text/javascript'>alert('Picasso team already have 2 participents');</script>";
					}
					else
					{*/
						$sql .="UPDATE `e_info` SET `picasso`='$picasso',`picasso2`='$picasso2' WHERE rollno='$rollno';";
					//}
				}
				elseif($picasso=='no')
				{
					$sql .="UPDATE `e_info` SET `picasso`='$picasso',`picasso2`='$picasso2' WHERE rollno='$rollno';";
				}

				if($video=='yes')
				{
					$sql1 ="SELECT COUNT(*) FROM e_info WHERE videoid='$videoid';";
					$rec1=mysqli_query($conn,$sql1);
					$row = mysqli_fetch_row($rec1);
					$vcount = $row[0];
					
					if($vcount>1)
					{	
    					echo "<script type='text/javascript'>alert('One minute video team already have 2 participents');</script>";
					}
					else
					{
						$sql .="UPDATE `e_info` SET `video`='$video',`videoid`='$videoid' WHERE rollno='$rollno';";
					}
				}
				elseif ($video=='no') {
					$sql .="UPDATE `e_info` SET `video`='$video',`videoid`='$videoid' WHERE rollno='$rollno';";
				}

				
				
					$sql .="UPDATE `e_info` SET `codejam`='$codejam' WHERE rollno='$rollno';";
				

				
				
					$sql .="UPDATE `e_info` SET `web`='$web' WHERE rollno='$rollno';";
				

				
				
					$sql .="UPDATE `e_info` SET `selfie`='$selfie' WHERE rollno='$rollno';";
				

				/*$sql .= "UPDATE `e_info` SET `lan`='$lan',`lanid`='$lanid',`poster`='$poster',`posterid`='$posterid',`codejam`='$codejam',`web`='$web',`picasso`='$picasso',`picasso2`='$picasso2',`picassoid`='$picassoid',`video`='$video',`videoid`='$videoid',`selfie`='$selfie' WHERE rollno='$rollno'";*/
				if ($conn->multi_query($sql) === TRUE) {
    				echo "Records updated successfully";
				} else {
    				echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		
				
?>
</form>
</body>
</html>