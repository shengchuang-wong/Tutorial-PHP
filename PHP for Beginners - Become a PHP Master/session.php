<?php 

session_save_path("/home/users/web/b2742/ipg.doomexcom/cgi-bin/tmp");

session_start();

	if(isset($_SESSION["greeting"])) {
		echo $_SESSION["greeting"];
	} else {
		$_SESSION["greeting"] = "Hello you";
	}

?>