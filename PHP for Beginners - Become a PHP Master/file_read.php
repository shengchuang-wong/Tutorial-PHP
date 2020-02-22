<?php 


$file = "example.txt";

if($handle = fopen($file, 'r')) {

	// Each byte equals one character
	echo $content = fread($handle, filesize($file));

	fclose($handle);

} else {

	echo "The files could not be written / found";

}


?>