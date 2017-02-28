<?php
	session_start();
	include_once("bg.php");
	
	mysql_connect('localhost','root','')or die("CONNECTION FAILED");
	mysql_select_db('project')or die("CONNECTION TO DB FAILED");
	
?>
<html>
<head><title>Update Time-Table</title>
<link rel = "stylesheet" href="mystyle.css"/></head>

<center>
<body>
<section id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">					
					<h1 class="heading bold">
					
<?php
	$semester=$_POST['sem'];
	$_SESSION['sem']=$semester;
	echo"<h2>Welcome To Update Time Table For ".$_POST['sem']."</h2>";
?>
</h1>
<hr>

</div>
<?php
	include_once("header.php");
?>
<div id="timetable" class="timetable">
<form action="update2.php" method="POST">
	<table>
		<tr>
			<th></th>
			<th>9:00-9:55</th>
			<th>9:55-10:50</th>
			<th>10:50-11:05</th>
			<th>11:05-12:00</th>
			<th>12:00-12:55</th>
			<th>12:55-1:45</th>
			<th>1:45-2:40</th>
			<th>2:40-3:35</th>
			<th>3:35-4:30</th>
		</tr>
		<tr>
			<th>Monday</th>
			<th>
				<select name="sub1">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub1'];?>"><?php echo $row['sub1'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty1">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty1'];?>"><?php echo $row['faculty1'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room1">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room1'];?>"><?php echo $row['room1'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub2">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub2'];?>"><?php echo $row['sub2'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty2">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty2'];?>"><?php echo $row['faculty2'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room2">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room2'];?>"><?php echo $row['room2'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub3">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub3'];?>"><?php echo $row['sub3'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty3">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty3'];?>"><?php echo $row['faculty3'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room3">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room3'];?>"><?php echo $row['room3'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub4">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub4'];?>"><?php echo $row['sub4'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty4">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty4'];?>"><?php echo $row['faculty4'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room4">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room4'];?>"><?php echo $row['room4'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub5">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub5'];?>"><?php echo $row['sub5'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty5">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty5'];?>"><?php echo $row['faculty5'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room5">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room5'];?>"><?php echo $row['room5'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub6">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub6'];?>"><?php echo $row['sub6'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty6">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty6'];?>"><?php echo $row['faculty6'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room6">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room6'];?>"><?php echo $row['room6'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub7">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub7'];?>"><?php echo $row['sub7'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty7">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty7'];?>"><?php echo $row['faculty7'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room7">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room7'];?>"><?php echo $row['room7'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr>
		<tr>
			<th>Tuesday</th>
			<th>
				<select name="sub8">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub8'];?>"><?php echo $row['sub8'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty8">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty8'];?>"><?php echo $row['faculty8'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room8">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room8'];?>"><?php echo $row['room8'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub9">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub9'];?>"><?php echo $row['sub9'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty9">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty9'];?>"><?php echo $row['faculty9'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room9">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room9'];?>"><?php echo $row['room9'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub10">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub10'];?>"><?php echo $row['sub10'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty10">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty10'];?>"><?php echo $row['faculty10'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room10">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room10'];?>"><?php echo $row['room10'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub11">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub11'];?>"><?php echo $row['sub11'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty11">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty11'];?>"><?php echo $row['faculty11'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room11">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room11'];?>"><?php echo $row['room11'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub12">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub12'];?>"><?php echo $row['sub12'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty12">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty12'];?>"><?php echo $row['faculty12'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room12">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room12'];?>"><?php echo $row['room12'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub13">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub13'];?>"><?php echo $row['sub13'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty13">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty13'];?>"><?php echo $row['faculty13'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room13">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room13'];?>"><?php echo $row['room13'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub14">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub14'];?>"><?php echo $row['sub14'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty14">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty14'];?>"><?php echo $row['faculty14'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room14">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room14'];?>"><?php echo $row['room14'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr>
		<tr>
			<th>Wednesday</th>
			<th>
				<select name="sub15">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub15'];?>"><?php echo $row['sub15'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty15">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty15'];?>"><?php echo $row['faculty15'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room15">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room15'];?>"><?php echo $row['room15'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub16">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub16'];?>"><?php echo $row['sub16'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty16">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty16'];?>"><?php echo $row['faculty16'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room16">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room16'];?>"><?php echo $row['room16'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub17">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub17'];?>"><?php echo $row['sub17'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty17">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty17'];?>"><?php echo $row['faculty17'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room17">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room17'];?>"><?php echo $row['room17'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub18">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub18'];?>"><?php echo $row['sub18'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty18">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty18'];?>"><?php echo $row['faculty18'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room18">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room18'];?>"><?php echo $row['room18'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub19">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub19'];?>"><?php echo $row['sub19'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty19">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty19'];?>"><?php echo $row['faculty19'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room19">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room19'];?>"><?php echo $row['room19'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub20">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub20'];?>"><?php echo $row['sub20'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty20">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty20'];?>"><?php echo $row['faculty20'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room20">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room20'];?>"><?php echo $row['room20'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub21">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub21'];?>"><?php echo $row['sub21'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty21">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty21'];?>"><?php echo $row['faculty21'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room21">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room21'];?>"><?php echo $row['room21'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr>
		<tr>
			<th>Thursday</th>
			<th>
				<select name="sub22">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub22'];?>"><?php echo $row['sub22'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty22">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty22'];?>"><?php echo $row['faculty22'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room22">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room22'];?>"><?php echo $row['room22'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub23">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub23'];?>"><?php echo $row['sub23'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty23">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty23'];?>"><?php echo $row['faculty23'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room23">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room23'];?>"><?php echo $row['room23'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub24">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub24'];?>"><?php echo $row['sub24'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty24">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty24'];?>"><?php echo $row['faculty24'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room24">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room24'];?>"><?php echo $row['room24'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub25">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub25'];?>"><?php echo $row['sub25'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty25">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty25'];?>"><?php echo $row['faculty25'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room25">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room25'];?>"><?php echo $row['room25'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub26">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub26'];?>"><?php echo $row['sub26'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty26">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty26'];?>"><?php echo $row['faculty26'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room26">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room26'];?>"><?php echo $row['room26'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub27">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub27'];?>"><?php echo $row['sub27'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty27">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty27'];?>"><?php echo $row['faculty27'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room27">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room27'];?>"><?php echo $row['room27'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub28">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub28'];?>"><?php echo $row['sub28'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty28">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty28'];?>"><?php echo $row['faculty28'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room28">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room28'];?>"><?php echo $row['room28'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr>
		<tr>
			<th>Friday</th>
			<th>
				<select name="sub29">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub29'];?>"><?php echo $row['sub29'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty29">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty29'];?>"><?php echo $row['faculty29'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room29">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room29'];?>"><?php echo $row['room29'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub30">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub30'];?>"><?php echo $row['sub30'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty30">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty30'];?>"><?php echo $row['faculty30'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room30">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room30'];?>"><?php echo $row['room30'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub31">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub31'];?>"><?php echo $row['sub31'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty31">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty31'];?>"><?php echo $row['faculty31'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room31">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room31'];?>"><?php echo $row['room31'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub32">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub32'];?>"><?php echo $row['sub32'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty32">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty32'];?>"><?php echo $row['faculty32'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room32">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room32'];?>"><?php echo $row['room32'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub33">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub33'];?>"><?php echo $row['sub33'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty33">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty33'];?>"><?php echo $row['faculty33'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room33">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room33'];?>"><?php echo $row['room33'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub34">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub34'];?>"><?php echo $row['sub34'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty34">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty34'];?>"><?php echo $row['faculty34'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room34">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room34'];?>"><?php echo $row['room34'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub35">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub35'];?>"><?php echo $row['sub35'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty35">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty35'];?>"><?php echo $row['faculty35'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room35">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room35'];?>"><?php echo $row['room35'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr><tr>
			<th>Saturday</th>
			<th>
				<select name="sub36">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub36'];?>"><?php echo $row['sub36'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty36">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty36'];?>"><?php echo $row['faculty36'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room36">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room36'];?>"><?php echo $row['room36'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub37">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub37'];?>"><?php echo $row['sub37'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty37">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty37'];?>"><?php echo $row['faculty37'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room37">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room37'];?>"><?php echo $row['room37'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>SHORT BREAK</th>
			<th>
				<select name="sub38">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub38'];?>"><?php echo $row['sub38'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty38">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty38'];?>"><?php echo $row['faculty38'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room38">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room38'];?>"><?php echo $row['room38'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub39">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub39'];?>"><?php echo $row['sub39'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty39">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty39'];?>"><?php echo $row['faculty39'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room39">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room39'];?>"><?php echo $row['room39'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>LUNCH BREAK</th>
			<th>
				<select name="sub40">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub40'];?>"><?php echo $row['sub40'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty40">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty40'];?>"><?php echo $row['faculty40'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room40">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room40'];?>"><?php echo $row['room40'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub41">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub41'];?>"><?php echo $row['sub41'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty41">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty41'];?>"><?php echo $row['faculty41'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room41">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room41'];?>"><?php echo $row['room41'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
			<th>
				<select name="sub42">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['sub42'];?>"><?php echo $row['sub42'];?></option>
					<?php
							$query="SELECT * FROM ".$semester."sub";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['subjects'];?>"><?php echo $row['subjects'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="faculty42">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['faculty42'];?>"><?php echo $row['faculty42'];?></option>
					<?php
							$query="SELECT * FROM faculty";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['faculty_name'];?>"><?php echo $row['faculty_name'];?>
						</option>
							<?php } ?>
				</select>
				</br>
				<select name="room42">
					<?php
						$result =mysql_query("SELECT * FROM $semester WHERE sem='$semester'");
						$row = mysql_fetch_array($result);
					?>
					<option value="<?php echo $row['room42'];?>"><?php echo $row['room42'];?></option>
					<?php
							$query="SELECT * FROM room";
							$sql=mysql_query($query);
							while($row=mysql_fetch_array($sql))
							{?>
						<option value="<?php echo $row['room_number'];?>"><?php echo $row['room_number'];?>
						</option>
							<?php } ?>
				</select>
			
			</th>
		</tr>
	</table>
	</br>
	<input type="submit" name="update" value="Save & Update"/>
	<input type="button" name="cancel" value="Cancel & Go Back" onclick="location.href='update.php'"/>
	<input type="reset" value="Reset"/>
</form>
				</div>
			</div>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>Copyright © Abhishek And Team | Design: <a href="https://www.facebook.com/abhishek.upadhyay3" target="_parent">Abhishek</a></p>
				<hr>
				<ul class="social-icon">
					<li><a href="https://www.facebook.com/abhishek.upadhyay3" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>	

</body>
</center>
</html>