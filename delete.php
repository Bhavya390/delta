<?php 
//include database connection
		require ('core/connect/connection.php');
//session start
session_start();
//check whether the session varible admin_Id is present or not
if(!isset($_SESSION['admin_Id']) || (trim($_SESSION['admin_Id']) == '')){
			header("location: formlogin.php");
			exit();
	}
	$id= $_SESSION['admin_Id'];	
	

$postID = isset($_POST['submit'])?intval($_POST['submit']):0;
echo $postID;
// proceed with the query
if($postID>0) { $query = "DELETE FROM posts WHERE postID = '$postID'";

}

// redirect to the main table with header("location: main.php");

?>