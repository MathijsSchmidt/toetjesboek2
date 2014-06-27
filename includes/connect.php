<?php
require_once('../config/config.php');
mysql_connect(db_host , db_user, db_pass) or die(mysql_error("geen DB gevonden"));
mysql_select_db(db_name) or die(mysql_error("geen DB gevonden"));

?>
