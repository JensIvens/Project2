<?php 
	
	session_start();
	if(isset($_SESSION['userid']))
	{
		unset($_SESSION['userid']);
		session_write_close();
		header("location: login.php");
	}
	else
	{
		header("location: login.php");
	}

 ?>