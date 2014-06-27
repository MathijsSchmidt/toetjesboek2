<?php 
require_once('../config/config.php');
$database->connect();

session_start();

if(!empty($_GET['searchterm'])) {
	$query = mysql_query("SELECT * FROM gerecht WHERE gerechtnaam LIKE '%" .mysql_real_escape_string($_GET['searchterm']). "%'");
} else {
	$query = mysql_query("SELECT * FROM gerecht");
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<title> Toetjesboek </title>
			<link rel="stylesheet" type="text/css" href="css/main.css">
		</head>
	<body>


<div id="index_box" align="middle";>
	<table>
		<tr>
			<th>Gerechtnaam</th>
		</tr>

		<?php

		while($row = mysql_fetch_array($query)) {

			echo "<tr><td><a href='gerecht.php?gerecht=" .$row['gerechtnaam']. "'>" .$row['gerechtnaam']. "</a></td></tr>";

		}

		?>
	</table>
</div>

