<?php
session_start();
if(!session_is_registered(username)){
header("location:home.php");
}
?>
