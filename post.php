<?php

//include database connection
		require ('core/connect/connection.php');
		//session start
		session_start();
		if(!isset($_SESSION['admin_Id']) || (trim($_SESSION['admin_Id']) == '')){
			header("location: formlogin.php");
			exit();
	}
	$id= $_SESSION['admin_Id'];	

//echo '<h2>You posted:</h2><hr />'.$_POST['postTitle'] . '<hr />' . stripslashes($_POST['postCont']);
$title=$_POST['postTitle'];
$content =stripslashes($_POST['postCont']);
$desc=$_POST['postDesc'];
date_default_timezone_set('Asia/Calcutta');
$date= date('Y-m-d h-i-s'); 

$q="INSERT INTO `posts`( `Id`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES ('$id','$title','$desc','$content','$date')";
$r=mysql_query($q);
if (!$r) {
  die('Error: ' . mysql_error());
}
echo "1 record added";



?>