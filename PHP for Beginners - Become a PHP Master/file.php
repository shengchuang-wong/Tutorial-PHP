<?php 


$file = "example.txt";

if($handle = fopen($file, 'w')) {

	fwrite($handle, "GeekGosh Here!");

	fclose($handle);

} else {

	echo "The files could not be written / found";

}


?>