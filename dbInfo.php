<?php
	$DBHostName="mysql126.hosting.earthlink.net";
	$DBUserName="rwk6160";
	$DBPassword="rkortmann";
	
	$dbLink = mysql_connect($DBHostName,$DBUserName,$DBPassword) or
	die("Could not connect: " . mysql_error());

	mysql_select_db("rwkcomments");
?>
