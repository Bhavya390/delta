<?php 
		//start session
		session_start();
		//unset the varibles stored in session
		unset($_SESSION['admin_Id']);
		unset($_SESSION['acess_token']);
?>




<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Login</title>
</head>
<body>	
	<div id="container">
		<ul>
			<li><a href="index.php">Home</a></li>
			
			<li><a href="login.php">Login</a></li>
            	</ul>
		<h1>Login</h1>
 
		
		<form method="post" action="login_exec.php">
		<table width ="309" border ="0" align ="left" cellpadding ="5" cellspacing ="5">
			<tr>
				<td colspan ="2">
				<!--the code below is used to display the message of the input validation-->
				<?php 
						if(isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR'])>0)
						{
							echo '<ul class ="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg){
								echo '<li>',$msg,'</li>';
								}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
						}
						?>
				</td>
			</tr>
			<tr>
				<td width ="116"><div align = "left"><h4>Access Key for Team-Admin:</h4></div></td>
				<td width="117"><input type="text" name="key"></td>
			</tr>
			<tr>
				<td><div align ="left"></div></td>
				<td><input type="submit" name="submit"></td>
			</tr>
	
			</table>
			
		</form>
	
</body>
</html>