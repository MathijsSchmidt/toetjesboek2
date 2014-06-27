<?php 
require_once('../config/config.php');

session_start();


?>


<!DOCTYPE html>
	<html>
		<head>
			<title> Toetjesboek </title>
			<link rel="stylesheet" type="text/css" href="../css/main.css">
		</head>
	<body>


<div id="login" align="center">
	<h1> Toetjesboek </h1><hr>
	Vul de onderstaande velden in: <br><br><br>

	<form action="check_login.php" method="POST">
	<table>
		<tr>
			<td> Gebruikersnaam </td>
			<td> <input type="text" id="l_field" name="name"/> </td>
		</th>
		<tr>
			<td> Wachtwoord </td>
			<td> <input type="password" id="l_field" name="pass"/> </td>
		</tr>
		<tr>
			<td></td>
			<td> <input type="submit" id="submit" value="Login" name="submit"> </td>
		</tr>
	</table>


	<br> <br> <br>
	<a href="../index.php"> terug naar de startpagina </a>
</form>

