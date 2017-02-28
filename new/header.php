<?php
	extract($_POST); 
	if(isset($_SESSION['username']))
	{
	 echo "<div align='right'><strong>Welcome : $_SESSION[username]  <a href=\"signout.php\">Signout</a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
?>