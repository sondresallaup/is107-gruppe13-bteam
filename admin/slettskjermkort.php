<?php
	include "mysql_connect.php";

	$tabell = "skjermkort";
	$id = $_POST['ch1'];
	$sql = "DELETE FROM $tabell WHERE (`$tabell`.`ID` = $id)";

	$slett = mysql_query($sql);
	if (!$slett) 
	{
		die ("klarte ikke å slette skjermkort" ); echo mysql_error();
	}

	include "mysql_connect.php";
	include "redigerkomponent.php";
	session_start();
?>