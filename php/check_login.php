<?php
include('../includes/connect.php');
session_start();

$username=$_POST['name']; 
$password=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($username);
$mypassword = stripslashes($password);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql=mysql_query("SELECT * FROM gebruiker WHERE gebruikersnaam='$myusername' and wachtwoord='$mypassword' ");
$result=mysql_fetch_array($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($sql);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['username']=$username;
		header("location:home.php");
		} 

else {
echo "Wrong Username or Password";
}

?>