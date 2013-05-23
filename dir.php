<?php
	//echo dirname(__FILE__).DIRECTORY_SEPARATOR.'cometchat'.DIRECTORY_SEPARATOR.'cache';
	
	$var = dirname(__FILE__).DIRECTORY_SEPARATOR.'cometchat-local'.DIRECTORY_SEPARATOR.'cometchat'.DIRECTORY_SEPARATOR.'cache'.DIRECTORY_SEPARATOR;
	$path = $var;
// Loop over all of the files in the folder
	foreach(glob($path ."*.*") as $file) {
		unlink($file); // Delete each file through the loop
	}
		echo "<BR>";	
	
	
	
	


?>
	
