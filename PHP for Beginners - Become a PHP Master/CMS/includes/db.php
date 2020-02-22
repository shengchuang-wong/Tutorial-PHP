<?php

$db["db_host"] = "doomexcom.ipagemysql.com";
$db["db_user"] = "foundragon";
$db["db_pass"] = "123456qwe";
$db["db_name"] = "php_cms";

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($link) {
	// echo "We are connected";
} else if(mysqli_connect_error) {
	die("Database connection error.");
}

?>