<?php  

if(isset($_COOKIE["Someone"])) {

	$someOne = $_COOKIE["Someone"];
	echo "$someOne";

} else {
	$name = "Someone";
	$value = 100;
	$expiration = time() + (60 * 60 * 24 * 7);

	setcookie($name, $value, $expiration);

	echo "Cookie set";
}

?>