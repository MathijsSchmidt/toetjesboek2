<?php 
require_once('../config/config.php');
$database->connect();

session_start();

if(empty($_GET['gerecht'])) {
	die("Er is geen gerecht gevonden.");
} 

$query = mysql_query("SELECT * FROM `gerecht` WHERE gerechtnaam = '" .mysql_real_escape_string($_GET['gerecht']). "'");
$row = mysql_fetch_array($query)

?>
<!DOCTYPE html>
	<html>
		<head>
			<title> Toetjesboek </title>
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
	<body>


<div id="index_box" align="middle";>
	<p>Gerechtnaam: <?php echo $row['gerechtnaam']; ?></p>
	<p>EnergiePP: <?php echo $row['energiePP']; ?></p>
	<p>bereidingstijd: <?php echo $row['bereidingstijd']; ?></p>
	<p>bereidingswijze: <?php echo $row['bereidingswijze']; ?></p>
</div>

