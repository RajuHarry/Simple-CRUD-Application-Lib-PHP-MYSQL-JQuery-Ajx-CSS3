<?php

$db_name = "cmanage";				// The database we created earlier in phpMyAdmin.
$db_server = "localhost";	// Change if you have this hosted.
$db_user = "root";				// Your USERNAME	
$db_pass = ""; 				// Your PASSWORD. Working locally, mine is blank. Change if you plan on deploying.


$mysqli = new MySQLi($db_server, $db_user, $db_pass, $db_name) 
			or die(mysqli_error());

?>
