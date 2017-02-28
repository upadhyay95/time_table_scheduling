<?php     
         session_start();
         session_destroy();
         echo "<script>
						alert('You Are Loggedout Successfully');
						window.location.href='login.php';
						</script>";
?>