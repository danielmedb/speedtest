<?php


/* Connect to database
	--------------------------------------------------------------------------- */
$host 		= ""; 		// Host name
$username 	= ""; 			// Mysql username
$password 	= ""; 				// Mysql password
$db_name 	= ""; 				// Mysql DB



// DB Prefix
$db_prefix = "";

$mysqli = new Mysqli($host, $username, $password, $db_name);
mysqli_set_charset($mysqli, "utf8");
$current_time = date('Y-m-d H:m:s');
$yearMonthDay = date('Y-m-d');


/* Timezone
	--------------------------------------------------------------------------- */
date_default_timezone_set('Europe/Stockholm');
