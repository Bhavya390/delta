<div id="bar">
		<button><a href="">DashBoard</a></button>
		<button><a href="register.php">users</a></button>
		<button><a href="viewwebsite.php">View website</a></button>
		<button><a href="logout.php">Logout</a></button>
		</div>
		
<div id="addPost">
		<table border="2" align="left" >
		<tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
		<th>Action</th>
		</tr>
		<tr>
		
		<button><a href="texteditor.php">Addpost</a></button>
		</tr>
		<tr>
		
	
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
	
//$q="SELECT postTitle ,postDesc,postDate ,postID FROM posts ";
//$q="SELECT teams.id ,postTitle,postDesc,postDate,postID from posts inner join teams on teams.id = posts.Id";
$q = "SELECT postTitle ,postDesc,postDate ,postID FROM posts where Id = $id";
$r=mysql_query($q);
$limit=5;
$count=0;
while ($row = mysql_fetch_array($r)):
    $title= $row['postTitle'] ;
	$Des= $row['postDesc'] ;
	$date= $row['postDate'] ;  
	$id = $row['postID'];
?>
<td><?php echo $title; ?></td>
        <td><?php echo $Des; ?></td>
        <td><?php echo $date; ?></td>
		<td class="contact-edit">
		<form action='edit.php' method="post">
        <input type="hidden" name="id1" value="<?php  $id; ?> " id="id1">
        <input type="submit" name="submit" value="Edit">
		</form>
		</td>
        <td class="contact-delete">
		<form action='delete.php' method="post" name="delete" id="id2">
        <input type="hidden" name="id2" value="<?php  $id; ?>">
        <input type="submit" name="submit" value="Delete">
		</form>
		</td>
		
    </tr>
    <?php endwhile; ?>
</table>





<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css"/>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script src="js/adminhome.js" type="text/javascript"></script>
	<title>DashBoard</title>
</head>
<body>
		
	
		
	
</body>
</html>
