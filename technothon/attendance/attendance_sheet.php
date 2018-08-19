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
<html>
<head>
	<title>Attendance_sheet</title>
</head>
<body>
	<form action="" method="post"> 
		<table align="center">
			<tr>
				<td>Event</td>
				<td>
					<select name="event">
						<option value="-1">Select event</option>
						<option value="lan">Lan Gaming</option>
						<option value="poster">Poster Presentation</option>
						<option value="codejam">Codejam</option>
						<option value="web">Web Craft</option>
						<option value="picasso">Picasso</option>
						<option value="video">One minute video</option>
						<option value="selfie">Chal Beta Selfie...</option>
					</select>
				</td>
				<td>
					<input type="submit" name="get_sheet">
				</td>
			</tr>
		</table>

			
		
		<?php
		if(isset($_POST['get_sheet']))
		{


			$event=$_POST['event'];
				
			if($event=='lan')
			{	$i=1;
				echo '<center><h1>Lan Gaming</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name,e.lanid FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.lan='yes' order by e.lanid";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:100px; border:1px solid black;"><b>Team_id</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;">'.$row['lanid'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='poster')
			{
				$i=1;
				echo '<center><h1>Poster Presentation</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name,e.posterid FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.poster='yes' order by e.posterid";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:100px; border:1px solid black;"><b>Team_id</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;">'.$row['posterid'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='picasso')
			{
				$i=1;
				echo '<center><h1>Picasso</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name,e.picassoid FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.picasso='yes' order by e.picassoid";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:100px; border:1px solid black;"><b>Team_id</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;">'.$row['picassoid'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='video')
			{
				$i=1;
				echo '<center><h1>One Minute Video</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name,e.videoid FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.video='yes' order by e.videoid";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:100px; border:1px solid black;"><b>Team_id</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;">'.$row['videoid'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='codejam')
			{
				$i=1;
				echo '<center><h1>Codejam</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.codejam='yes'";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='selfie')
			{
				$i=1;
				echo '<center><h1>Chal beta selfie le le re...</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.selfie='yes'";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}elseif($event=='web')
			{
				$i=1;
				echo '<center><h1>Web Craft</h1></center>';
				$sql1 = "SELECT s.rollno ,s.name FROM s_info as s,e_info as e WHERE s.rollno=e.rollno AND e.web='yes'";
				$rec1=mysqli_query($conn,$sql1);
				echo '<table style="border:3px solid black; border-collapse: collapse;" align="center">';
					echo '<tr><th style="width:50px; border:1px solid black;"><b>Sr No</b></th><th style="width:150px; border:1px solid black;"><b>Roll No</b></th><th style="width:200px; border:1px solid black;"><b>Name</b></th><th style="width:200px; border:1px solid black;"><b>Sign.</b></th></tr>';
				while($row = mysqli_fetch_assoc($rec1))
				{
					echo '<tr><td style="border:1px solid black;">'.$i.'</td><td style="border:1px solid black;">'.$row['rollno'].'</td><td style="border:1px solid black;">'.$row['name'].'</td><td style="border:1px solid black;"></td></tr>';
					$i=$i+1;
				}	
				echo '</table>';
			}
			

			}
		?>
	</form>
</body>
</html>