<?php 
		//start session
		session_start();
		
		//include database connection
		require ('core/connect/connection.php');
		
		
		//array to store validation errors
		$errmsg_arr = array();
		
		//validation error flag
		$errflag = false;
		
		//function to sanitize values received from the form
		
		function clean($str){
						$str = @trim($str);
						if(get_magic_quotes_gpc()){
								$str = stripslashes($str);
						}return mysql_real_escape_string($str);
		}
		
		//sanitize the post values
		$acesstoken = clean($_POST['key']);
		
		
		//input validation
		if($acesstoken == ''){
				$errmsg_arr[] = 'Sorry, but we need your access key for team.';
				$errflag = true;
		}
		
		//if there are input validations, redirect to formlogin page
		if($errflag){
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: formlogin.php");
				exit();
		}
		
		//create query
		$qry = "SELECT * FROM teams WHERE AccessKey = '$acesstoken'";
		$result = mysql_query($qry);
		echo $result;
		
		//check whether the query was successful or not
		if($result)
		{
			if(mysql_num_rows($result)>0){
					//login successful
					session_regenerate_id();
					$member = mysql_fetch_assoc($result);
					$_SESSION['admin_Id'] = $member['Id'];
					$_SESSION['acess_token'] = $member['AccessKey'];
					session_write_close();
					header("location: home.php");
					exit();
				} else {
							//login not successful
							$errmsg_arr[] = "Sorry, that accessKey is invalid";
							$errflag = true;
							if($errflag)
							{
										$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
										session_write_close();
										header("location: formlogin.php");
										exit();
							}
		
		                } 
		}
?>
					