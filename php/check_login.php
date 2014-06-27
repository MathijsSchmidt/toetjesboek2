<?php
include('../config/config.php');
$database->connect();

$username=$_POST['name']; 
$password=$_POST['pass']; 


$myusername = stripslashes($username);
$mypassword = stripslashes($password);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql=mysql_query("SELECT * FROM gebruiker WHERE gebruikersnaam='$myusername' and wachtwoord='$mypassword' ");
$result=mysql_fetch_array($sql);


$count=mysql_num_rows($sql);


if($count==1){

		
		$_SESSION['username']=$username;
		header("location:login_succes.php");
		} 

else {
echo "Wrong Username or Password";
}

?>