<?php
$con=mysql_connect('localhost','root','root');

if (!$con) {
	echo "<h3>Unable to connect to database. Please check details in configuration file.</h3>";
	//exit();
}
else {
	echo "connect<BR>";

	mysql_selectdb('cometchat',$con);
	/*for($i=22;$i<100;$i++) {

		mysql_query("INSERT INTO `cometchat`.`users` (`id`, `username`, `last`) VALUES (NULL, 'user".$i."', '0');");
		echo mysql_error();
		echo $i."query executed";
	}*/
	
	/* friends insert */
	for($i=1;$i<100;$i++) {
		for($j=1;$j<100;$j++){
			if ($i != $j)
				mysql_query("INSERT INTO `friends` (`fromid`, `toid`, `status`) VALUES ('".$i."', '".$j."','1');");
				echo mysql_error();
		}
	}
	echo "done";
}
