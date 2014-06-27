<?php 
include('../includes/connect.php');

if (empty($_POST) === false) {
			
			$errors = array();


if(isset($_POST['submit'])){
$username=$_POST['name'];
$password=$_POST['pass'];
$name=$_POST['voornaam'];
$tusvoeg=$_POST['tusvoeg'];
$surname=$_POST['achternaam'];

if  (empty($username) === true || empty($password) === true || empty($name) === true || empty($tusvoeg) === true || empty($surname) === true ){
			$errors[] = 'Niet alle Verplichte velden zijn ingevuld!';
		}				


if (empty($errors) === true) {
header("location:home.php"); 

mysql_query("INSERT INTO gebruiker (gebruikersnaam, wachtwoord, voornaam, tussenvoegsel, achternaam)
VALUES ('$username',MD5('$password') ,'$name', '$tusvoeg','$surname')");

$_SESSION['name']=$name;
echo mysql_error();
	}
}
}

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

	<form action="" method="POST">
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