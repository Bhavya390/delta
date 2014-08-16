<?php
require ('core/connect/connection.php');
//session start
session_start();
//check whether the session varible admin_Id is present or not
if(!isset($_SESSION['admin_Id']) || (trim($_SESSION['admin_Id']) == '')){
			header("location: formlogin.php");
			exit();
	}

$id=$_SESSION['admin_Id'] ;  
$q1="SELECT Team FROM teams where Id ='$id' ";
$s1=mysql_query($q1);
$r1=mysql_fetch_array($s1);
$i= $r1['Team'];
//echo $i;
 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="js/adminhome.js" type="text/javascript"></script>
	<title>Home Page of Admin</title>
</head>
<body>
		<p>Welcome Admin of <?php echo $i ?></p>
		<div id="bar">
		<button><a href="dashboard.php">DashBoard</a></button>
		<button><a href="register.php">users</a></button>
		<button><a href="viewwebsite.php">View website</a></button>
		<button><a href="logout.php">Logout</a></button>
		</div>
	
	
</body>
</html>
