<?php 
//echo "<pre>";
$cmd = 'tar -cvf '.$_REQUEST['file'].".tar.gz ".$_REQUEST['file'];

echo (shell_exec($cmd)) ? "Done" : "Error";
?>
