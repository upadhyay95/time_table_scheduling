<?php
	session_start();
	include_once("bg.php");
	mysql_connect('localhost','root','')or die("CONNECTION FAILED");
	mysql_select_db('project')or die("CONNECTION TO DB FAILED");
	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username!=''&&$password!='')
		{
			$query=mysql_query("select * from login where username='".$username."' and password='".$password."' ")  or die(mysql_error());
			$res=mysql_fetch_row($query);
			if($res)
			{
				$_SESSION['username']=$username;
				echo "<script>
						alert('Welcome $username !!');
						window.location.href='update.php';
						</script>";
			}
			else
			{
				echo "<script>
						alert('You Entered Wrong Username or Password');
						window.location.href='login.php';
						</script>";
			}
		}
		else
		{
			echo "<script>
						alert('Enter both username and password');
						window.location.href='login.php';
						</script>";
		}
	}
		
		
		
		
		
		
		
		
		
?>
<html>
<head><title>Login Here !! </title>
</head>
<body>
<center>

		<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					
					<h1 class="heading bold">Login To Proceed</h1>
					<hr>
				</div>
				
		<div class="CSSTableGenerator" >
                <form action="login.php" method="post">
				<center><table>
                    <tr>
                        <td colspan="2">
                            LOGIN HERE !!! 
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Username : 
                        </td>
                        <td>
                            <input type="text" name="username" placeholder="Username" required/>
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Password : 
                        </td>
                        <td>
                            <input type="password" name="password" placeholder="Password" required/>
                        </td>
                    </tr>
					<tr>
						<td align="center">
							<input type="submit" name="submit" value="Login" />
						</td>
						<td align="center">
							<input type="reset" value="Reset" />
						</form>
						</td>
					</tr>
				<table>
				</form>
</div>
</div></div></div>
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