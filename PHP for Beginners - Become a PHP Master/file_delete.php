<?php  

	$fileName = "delete_me.txt";

	if(file_exists($fileName)) {
		unlink($fileName);
		echo "File Deleted";
	} else {
		echo "File Not Found";
	}

?>