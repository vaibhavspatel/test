<?php 
//echo "<pre>";
$cmd = 'tar -xvf '.$_REQUEST['file'];
//echo $cmd;exit;
echo (shell_exec($cmd)) ? "Done" : "Error";
?>
