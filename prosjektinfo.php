<?php

session_start();

	if (!isset($_GET['submit'])){
		$msg = "Opprett ditt eget prosjekt!";
	} else {
		$msg = "Prosjekt opprettet -link til side-";
		$pnavn = strip_tags($_GET['prosjektnavn']);
		$pstatus = strip_tags($_GET['prosjektstatus']);
		
		$pkomponent = strip_tags($_GET['prosjektkomponent[]']);
		$writekomponent = implode("|",$pkomponent);
		
		$ptext = strip_tags($_GET['prosjekttextarea']);
		$submit = strip_tags($_GET['submit']);
		$username = $_SESSION['username'];
		$date = date("Y-m-d");
		}
	

?>

<html>
	<p><?php
		echo "dette er en test $writekomponent $pnavn <br />";
		echo var_dump($pkomponent) . "<br />";
		echo var_dump($writekomponent) . "<br />";
		?></p>
</html>