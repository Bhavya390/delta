<?php 

try {
	$db = new PDO("mysql:host=localhost;dbname=Sport-feeds-NITT", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    die($e->getMessage());
}



?>
