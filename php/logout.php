<?php 
include('../config/config.php');



$database->connect();

session_destroy();

$database->disconnect();

header('location: ../index.php');

?>
