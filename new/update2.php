<?php
	session_start();
	include_once("bg.php");
	mysql_connect('localhost','root','')or die("CONNECTION FAILED");
	mysql_select_db('project')or die("CONNECTION TO DB FAILED");
	include_once("header.php");
?>
<?php
	
	$table=$_SESSION['sem'];
?>
<?php
if(isset($_POST['update']))
{
	$sem=$_SESSION['sem'];
	
	$sub1=mysql_real_escape_string($_POST['sub1']);
	$sub2=mysql_real_escape_string($_POST['sub2']);
	$sub3=mysql_real_escape_string($_POST['sub3']);
	$sub4=mysql_real_escape_string($_POST['sub4']);
	$sub5=mysql_real_escape_string($_POST['sub5']);
	$sub6=mysql_real_escape_string($_POST['sub6']);
	$sub7=mysql_real_escape_string($_POST['sub7']);
	$sub8=mysql_real_escape_string($_POST['sub8']);
	$sub9=mysql_real_escape_string($_POST['sub9']);
	$sub10=mysql_real_escape_string($_POST['sub10']);
	$sub11=mysql_real_escape_string($_POST['sub11']);
	$sub12=mysql_real_escape_string($_POST['sub12']);
	$sub13=mysql_real_escape_string($_POST['sub13']);
	$sub14=mysql_real_escape_string($_POST['sub14']);
	$sub15=mysql_real_escape_string($_POST['sub15']);
	$sub16=mysql_real_escape_string($_POST['sub16']);
	$sub17=mysql_real_escape_string($_POST['sub17']);
	$sub18=mysql_real_escape_string($_POST['sub18']);
	$sub19=mysql_real_escape_string($_POST['sub19']);
	$sub20=mysql_real_escape_string($_POST['sub20']);
	$sub21=mysql_real_escape_string($_POST['sub21']);
	$sub22=mysql_real_escape_string($_POST['sub22']);
	$sub23=mysql_real_escape_string($_POST['sub23']);
	$sub24=mysql_real_escape_string($_POST['sub24']);
	$sub25=mysql_real_escape_string($_POST['sub25']);
	$sub26=mysql_real_escape_string($_POST['sub26']);
	$sub27=mysql_real_escape_string($_POST['sub27']);
	$sub28=mysql_real_escape_string($_POST['sub27']);
	$sub29=mysql_real_escape_string($_POST['sub29']);
	$sub30=mysql_real_escape_string($_POST['sub30']);
	$sub31=mysql_real_escape_string($_POST['sub31']);
	$sub32=mysql_real_escape_string($_POST['sub32']);
	$sub33=mysql_real_escape_string($_POST['sub33']);
	$sub34=mysql_real_escape_string($_POST['sub34']);
	$sub35=mysql_real_escape_string($_POST['sub35']);
	$sub36=mysql_real_escape_string($_POST['sub36']);
	$sub37=mysql_real_escape_string($_POST['sub37']);
	$sub38=mysql_real_escape_string($_POST['sub38']);
	$sub39=mysql_real_escape_string($_POST['sub39']);
	$sub40=mysql_real_escape_string($_POST['sub40']);
	$sub41=mysql_real_escape_string($_POST['sub41']);
	$sub42=mysql_real_escape_string($_POST['sub42']);
	
	$faculty1=mysql_real_escape_string($_POST['faculty1']);
	$faculty2=mysql_real_escape_string($_POST['faculty2']);
	$faculty3=mysql_real_escape_string($_POST['faculty3']);
	$faculty4=mysql_real_escape_string($_POST['faculty4']);
	$faculty5=mysql_real_escape_string($_POST['faculty5']);
	$faculty6=mysql_real_escape_string($_POST['faculty6']);
	$faculty7=mysql_real_escape_string($_POST['faculty7']);
	$faculty8=mysql_real_escape_string($_POST['faculty8']);
	$faculty9=mysql_real_escape_string($_POST['faculty9']);
	$faculty10=mysql_real_escape_string($_POST['faculty10']);
	$faculty11=mysql_real_escape_string($_POST['faculty11']);
	$faculty12=mysql_real_escape_string($_POST['faculty12']);
	$faculty13=mysql_real_escape_string($_POST['faculty13']);
	$faculty14=mysql_real_escape_string($_POST['faculty14']);
	$faculty15=mysql_real_escape_string($_POST['faculty15']);
	$faculty16=mysql_real_escape_string($_POST['faculty16']);
	$faculty17=mysql_real_escape_string($_POST['faculty17']);
	$faculty18=mysql_real_escape_string($_POST['faculty18']);
	$faculty19=mysql_real_escape_string($_POST['faculty19']);
	$faculty20=mysql_real_escape_string($_POST['faculty20']);
	$faculty21=mysql_real_escape_string($_POST['faculty21']);
	$faculty22=mysql_real_escape_string($_POST['faculty22']);
	$faculty23=mysql_real_escape_string($_POST['faculty23']);
	$faculty24=mysql_real_escape_string($_POST['faculty24']);
	$faculty25=mysql_real_escape_string($_POST['faculty25']);
	$faculty26=mysql_real_escape_string($_POST['faculty26']);
	$faculty27=mysql_real_escape_string($_POST['faculty27']);
	$faculty28=mysql_real_escape_string($_POST['faculty28']);
	$faculty29=mysql_real_escape_string($_POST['faculty29']);
	$faculty30=mysql_real_escape_string($_POST['faculty30']);
	$faculty31=mysql_real_escape_string($_POST['faculty31']);
	$faculty32=mysql_real_escape_string($_POST['faculty32']);
	$faculty33=mysql_real_escape_string($_POST['faculty33']);
	$faculty34=mysql_real_escape_string($_POST['faculty34']);
	$faculty35=mysql_real_escape_string($_POST['faculty35']);
	$faculty36=mysql_real_escape_string($_POST['faculty36']);
	$faculty37=mysql_real_escape_string($_POST['faculty37']);
	$faculty38=mysql_real_escape_string($_POST['faculty38']);
	$faculty39=mysql_real_escape_string($_POST['faculty39']);
	$faculty40=mysql_real_escape_string($_POST['faculty40']);
	$faculty41=mysql_real_escape_string($_POST['faculty41']);
	$faculty42=mysql_real_escape_string($_POST['faculty42']);
	
	$room1=mysql_real_escape_string($_POST['room1']);
	$room2=mysql_real_escape_string($_POST['room2']);
	$room3=mysql_real_escape_string($_POST['room3']);
	$room4=mysql_real_escape_string($_POST['room4']);
	$room5=mysql_real_escape_string($_POST['room5']);
	$room6=mysql_real_escape_string($_POST['room6']);
	$room7=mysql_real_escape_string($_POST['room7']);
	$room8=mysql_real_escape_string($_POST['room8']);
	$room9=mysql_real_escape_string($_POST['room9']);
	$room10=mysql_real_escape_string($_POST['room10']);
	$room11=mysql_real_escape_string($_POST['room11']);
	$room12=mysql_real_escape_string($_POST['room12']);
	$room13=mysql_real_escape_string($_POST['room13']);
	$room14=mysql_real_escape_string($_POST['room14']);
	$room15=mysql_real_escape_string($_POST['room15']);
	$room16=mysql_real_escape_string($_POST['room16']);
	$room17=mysql_real_escape_string($_POST['room17']);
	$room18=mysql_real_escape_string($_POST['room18']);
	$room19=mysql_real_escape_string($_POST['room19']);
	$room20=mysql_real_escape_string($_POST['room20']);
	$room21=mysql_real_escape_string($_POST['room21']);
	$room22=mysql_real_escape_string($_POST['room22']);
	$room23=mysql_real_escape_string($_POST['room23']);
	$room24=mysql_real_escape_string($_POST['room24']);
	$room25=mysql_real_escape_string($_POST['room25']);
	$room26=mysql_real_escape_string($_POST['room26']);
	$room27=mysql_real_escape_string($_POST['room27']);
	$room28=mysql_real_escape_string($_POST['room28']);
	$room29=mysql_real_escape_string($_POST['room29']);
	$room30=mysql_real_escape_string($_POST['room30']);
	$room31=mysql_real_escape_string($_POST['room31']);
	$room32=mysql_real_escape_string($_POST['room32']);
	$room33=mysql_real_escape_string($_POST['room33']);
	$room34=mysql_real_escape_string($_POST['room34']);
	$room35=mysql_real_escape_string($_POST['room35']);
	$room36=mysql_real_escape_string($_POST['room36']);
	$room37=mysql_real_escape_string($_POST['room37']);
	$room38=mysql_real_escape_string($_POST['room38']);
	$room39=mysql_real_escape_string($_POST['room39']);
	$room40=mysql_real_escape_string($_POST['room40']);
	$room41=mysql_real_escape_string($_POST['room41']);
	$room42=mysql_real_escape_string($_POST['room42']);
	
	$sql="UPDATE $table SET sub1='$sub1',sub2='$sub2',sub3='$sub3',sub4='$sub4',sub5='$sub5',sub6='$sub6',sub7='$sub7',sub8='$sub8',sub9='$sub9',sub10='$sub10',sub11='$sub11',
		sub12='$sub12',sub13='$sub13',sub14='$sub14',sub15='$sub15',sub16='$sub16',sub17='$sub17',sub18='$sub18',sub19='$sub19',sub20='$sub20',sub21='$sub21',
		sub22='$sub22',sub23='$sub23',sub24='$sub24',sub25='$sub25',sub26='$sub26',sub27='$sub27',sub28='$sub28',sub29='$sub29',sub30='$sub30',sub31='$sub31',
		sub32='$sub32',sub33='$sub33',sub34='$sub34',sub35='$sub35',sub36='$sub36',sub37='$sub37',sub38='$sub38',sub39='$sub39',sub40='$sub40',sub41='$sub41',
		sub42='$sub42',
		faculty1='$faculty1',faculty2='$faculty2',faculty3='$faculty3',faculty4='$faculty4',faculty5='$faculty5',faculty6='$faculty6',faculty7='$faculty7',
		faculty8='$faculty8',faculty9='$faculty9',faculty10='$faculty10',faculty11='$faculty11',faculty12='$faculty12',faculty13='$faculty13',faculty14='$faculty14',
		faculty15='$faculty15',faculty16='$faculty16',faculty17='$faculty17',faculty18='$faculty18',faculty19='$faculty19',faculty20='$faculty20',faculty21='$faculty21',
		faculty22='$faculty22',faculty23='$faculty23',faculty24='$faculty24',faculty25='$faculty25',faculty26='$faculty26',faculty27='$faculty27',faculty28='$faculty28',
		faculty29='$faculty29',faculty30='$faculty30',faculty31='$faculty31',faculty32='$faculty32',faculty33='$faculty33',faculty34='$faculty34',faculty35='$faculty35',
		faculty36='$faculty36',faculty37='$faculty37',faculty38='$faculty38',faculty39='$faculty39',faculty40='$faculty40',faculty41='$faculty41',faculty42='$faculty42',
		room1='$room1',room2='$room2',room3='$room3',room4='$room4',room5='$room5',room6='$room6',room7='$room7',room8='$room8',room9='$room9',room10='$room10',room11='$room11',
		room12='$room12',room13='$room13',room14='$room14',room15='$room15',room16='$room16',room17='$room17',room18='$room18',room19='$room19',room20='$room20',
		room21='$room21',room22='$room22',room23='$room23',room24='$room24',room25='$room25',room26='$room26',room27='$room27',room28='$room28',room29='$room29',
		room30='$room30',room31='$room31',room32='$room32',room33='$room33',room34='$room34',room35='$room35',room36='$room36',room37='$room37',room38='$room38',room39='$room39',
		room40='$room40',room41='$room41',room42='$room42' WHERE sem='$sem'";
		
		$result= mysql_query($sql);
		
		$result= mysql_query($sql);

	if($result)
	{
		echo "<script>
					alert('Updated Successfully !!');
					window.location.href='update.php';
			</script>";
	}
	else
	{
		echo "<script>
				alert('Update Unsuccessfull !!');
				window.location.href='update1.php';
			</script>";
	}
}
?>
	