<?php 

//globals
define ('DB_NAME', 'toetjesboek');
define ('DB_USER', 'grecht'); //grecht
define ('DB_PASS', 'aventus123'); //aventus123
define ('DB_HOST', 'localhost');

global $database; //database object

//classes
include('../classes/class.database.php');

//database 
$database = new Database(DB_HOST,DB_NAME,DB_USER,DB_PASS);
