<?php
require ('core/connect/connection.php');

session_start();
session_destroy();
?>

<?php header('Location:homepage/Index.php');
?>
