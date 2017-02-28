<?php
	session_start();
	include_once("bg.php");	
	mysql_connect('localhost','root','')or die("CONNECTION FAILED");
	mysql_select_db('project')or die("CONNECTION TO DB FAILED");

?>
<html>
<head><title>View Time Table</title>
<link rel = "stylesheet" href="mystyle.css"/></head>
<center><body>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">
						<?php
							$semester=$_POST['sem'];
							$_SESSION['sem']=$semester;
							echo"<h2> Time Table For ".$_POST['sem']."</h2>";
						?> 
					</h1>
				</div>
				
			<?php

	if(isset($_POST['view']))
{
	$sem=mysql_real_escape_string($_POST['sem']);
	$sql = mysql_query("SELECT * FROM $sem WHERE sem='$sem'");
	echo"<div class='timetable1' id='timetable1'>";
	echo "<table border='2' bordercolor='#6B8E23'>
			<tr bgcolor='#C0C0C0'>
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
			</tr>";
			
	while($row=mysql_fetch_array($sql))
	{
		echo "<tr>";
		echo "<th>"."Monday"."</th>";
		echo "<th>".$row['sub1']."</br>".$row['faculty1']."</br>".$row['room1']."</th>";
		echo "<th>".$row['sub2']."</br>".$row['faculty2']."</br>".$row['room2']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub3']."</br>".$row['faculty3']."</br>".$row['room3']."</th>";
		echo "<th>".$row['sub4']."</br>".$row['faculty4']."</br>".$row['room4']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub5']."</br>".$row['faculty5']."</br>".$row['room5']."</th>";
		echo "<th>".$row['sub6']."</br>".$row['faculty6']."</br>".$row['room6']."</th>";
		echo "<th>".$row['sub7']."</br>".$row['faculty7']."</br>".$row['room7']."</th>";
		echo "</tr>";
		
		echo "<tr bgcolor=''>";
		echo "<th>"."Tuesday"."</th>";
		echo "<th>".$row['sub8']."</br>".$row['faculty8']."</br>".$row['room8']."</th>";
		echo "<th>".$row['sub9']."</br>".$row['faculty9']."</br>".$row['room9']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub10']."</br>".$row['faculty10']."</br>".$row['room10']."</th>";
		echo "<th>".$row['sub11']."</br>".$row['faculty11']."</br>".$row['room11']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub12']."</br>".$row['faculty12']."</br>".$row['room12']."</th>";
		echo "<th>".$row['sub13']."</br>".$row['faculty13']."</br>".$row['room13']."</th>";
		echo "<th>".$row['sub14']."</br>".$row['faculty14']."</br>".$row['room14']."</th>";
		echo "</tr>";
		
		echo "<tr bgcolor=''>";
		echo "<th>"."Wednesday"."</th>";
		echo "<th>".$row['sub15']."</br>".$row['faculty15']."</br>".$row['room15']."</th>";
		echo "<th>".$row['sub16']."</br>".$row['faculty16']."</br>".$row['room16']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub17']."</br>".$row['faculty17']."</br>".$row['room17']."</th>";
		echo "<th>".$row['sub18']."</br>".$row['faculty18']."</br>".$row['room18']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub19']."</br>".$row['faculty19']."</br>".$row['room19']."</th>";
		echo "<th>".$row['sub20']."</br>".$row['faculty20']."</br>".$row['room20']."</th>";
		echo "<th>".$row['sub21']."</br>".$row['faculty21']."</br>".$row['room21']."</th>";
		echo "</tr>";
		
		echo "<tr bgcolor=''>";
		echo "<th>"."Thursday"."</th>";
		echo "<th>".$row['sub22']."</br>".$row['faculty22']."</br>".$row['room22']."</th>";
		echo "<th>".$row['sub23']."</br>".$row['faculty23']."</br>".$row['room23']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub24']."</br>".$row['faculty24']."</br>".$row['room24']."</th>";
		echo "<th>".$row['sub25']."</br>".$row['faculty25']."</br>".$row['room25']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub26']."</br>".$row['faculty26']."</br>".$row['room26']."</th>";
		echo "<th>".$row['sub27']."</br>".$row['faculty27']."</br>".$row['room27']."</th>";
		echo "<th>".$row['sub28']."</br>".$row['faculty28']."</br>".$row['room28']."</th>";
		echo "</tr>";
		
		echo "<tr bgcolor=''>";
		echo "<th>"."Friday"."</th>";
		echo "<th>".$row['sub29']."</br>".$row['faculty29']."</br>".$row['room29']."</th>";
		echo "<th>".$row['sub30']."</br>".$row['faculty30']."</br>".$row['room30']."</th>";
		echo "<th  bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub31']."</br>".$row['faculty31']."</br>".$row['room31']."</th>";
		echo "<th>".$row['sub32']."</br>".$row['faculty32']."</br>".$row['room32']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub33']."</br>".$row['faculty33']."</br>".$row['room33']."</th>";
		echo "<th>".$row['sub34']."</br>".$row['faculty34']."</br>".$row['room34']."</th>";
		echo "<th>".$row['sub35']."</br>".$row['faculty35']."</br>".$row['room35']."</th>";
		echo "</tr>";
		
		echo "<tr bgcolor=''>";
		echo "<th>"."Saturday"."</th>";
		echo "<th>".$row['sub36']."</br>".$row['faculty36']."</br>".$row['room36']."</th>";
		echo "<th>".$row['sub37']."</br>".$row['faculty37']."</br>".$row['room37']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Short Break"."</th>";
		echo "<th>".$row['sub38']."</br>".$row['faculty38']."</br>".$row['room38']."</th>";
		echo "<th>".$row['sub39']."</br>".$row['faculty39']."</br>".$row['room39']."</th>";
		echo "<th bgcolor='#DDA0DD'>"."Lunch Break"."</th>";
		echo "<th>".$row['sub40']."</br>".$row['faculty40']."</br>".$row['room40']."</th>";
		echo "<th>".$row['sub41']."</br>".$row['faculty41']."</br>".$row['room41']."</th>";
		echo "<th>".$row['sub42']."</br>".$row['faculty42']."</br>".$row['room42']."</th>";
		echo "</tr>";
		
	}
	echo "</table>";
	echo"</div>";
}
	
	?>
	</div>
	</div>
	</div>
	
	</br>
	<input type="submit" name="back" value="Go Back" onclick="window.location ='view.php'"/>
</body>
</center>
</html>
