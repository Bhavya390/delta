<?php 
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "Sport-feeds-NITT";
$prefix = "";
$bd = @mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database,$bd) or die("could not select database");
?>