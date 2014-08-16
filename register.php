<?php 
		require ('core/connect/connection.php');
		//session start
		session_start();
		//check whether the session varible admin_Id is present or not
			if(!isset($_SESSION['admin_Id']) || (trim($_SESSION['admin_Id']) == '')){
				header("location: formlogin.php");
				exit();
			}
		
?>
<