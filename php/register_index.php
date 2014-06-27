<?php 
include('../includes/connect.php');
?>

<!DOCTYPE html>
	<html>
		<head>
			<title> Toetjesboek </title>
			<link rel="stylesheet" type="text/css" href="../css/main.css">
		</head>
	<body>

		<div id="register" align="center">
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
			<td> Voornaam </td>
			<td> <input type="text" id="l_field" name="voornaam"/> </td>
		</th>
		<tr>
			<td> Tussenvoegsel </td>
			<td> <input type="text" id="l_field" name="tusvoeg"/> </td>
		</th>
		<tr>
			<td> Achternaam </td>
			<td> <input type="text" id="l_field" name="achternaam"/> </td>
		</th>
		<tr>
			<td></td>
			<td> <input type="submit" id="submit" value="Registreer" name="submit"> </td>
		</tr>
	</table>
</form>