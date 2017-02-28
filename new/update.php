<?php
	session_start();
	include_once("bg.php");
	
?>
<html>
<head>
<title>Update Time-table </title>

</head>
<body></br><center>
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">					
					<h1 class="heading bold">Update Time-Table</h1>
					<hr>
					<table align="right">
						<tr><td>
							<?php
									$name=$_SESSION['username'];     
									echo'welcome : '.$name.'&nbsp;&nbsp;&nbsp;';
									echo'<a href="signout.php">Signout</a>';
							?>
						</td>
						</tr>
					</table>
			<center>
</br></br></br>Select The Semester To Update Time Table : </br></br>
	<form action="update1.php" method="post">
	<select name="sem">
		<option>sem1</option>
		<option>sem2</option>
		<option>sem3</option>
		<option>sem4</option>
		<option>sem5</option>
		<option>sem6</option>
		<option>sem7</option>
		<option>sem8<option>
	</select>
	<input type="submit" name="update" value="Update"/>
	</form>
	</div>
		</div>	
		</div>
	</div>
</section>
	</center>
	
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
</html>