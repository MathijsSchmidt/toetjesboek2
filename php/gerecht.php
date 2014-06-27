<?php 
require_once('../config/config.php');
$database->connect();

session_start();

if(empty($_GET['gerecht'])) {
	die("Er is geen gerecht gevonden.");
} 

$gerecht = mysql_query("SELECT * FROM `gerecht` WHERE gerechtnaam = '" .mysql_real_escape_string($_GET['gerecht']). "'");
$ingredienten = mysql_query("SELECT * FROM `ingredient` WHERE gerechtnaam = '" .mysql_real_escape_string($_GET['gerecht']). "'");
$gerecht_data = mysql_fetch_array($gerecht);


?>
<!DOCTYPE html>
	<html>
		<head>
			<title> Toetjesboek </title>
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
	<body>


<div id="index_box" align="middle";>
	<p>Gerechtnaam: <?php echo $gerecht_data['gerechtnaam']; ?></p>
	<p>EnergiePP: <?php echo $gerecht_data['energiePP']; ?></p>
	<p>bereidingstijd: <?php echo $gerecht_data['bereidingstijd']; ?></p>
	<p>bereidingswijze: <?php echo $gerecht_data['bereidingswijze']; ?></p>

	<p>Ingredienten:
	<ul>
	<?php
	while($ingredienten_data = mysql_fetch_array($ingredienten)) {
		echo "<li>Product: " .$ingredienten_data['productnaam']. " HoeveelheidPP: " .$ingredienten_data['hoeveelheidPP']. "</li>";
	}
	?>
	</ul>
	</p>
</div>

