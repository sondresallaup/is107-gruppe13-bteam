<?php

session_start();

	if (!isset($_GET['submit'])){
		$msg = "Opprett ditt eget prosjekt!";
	} else {
		$msg = "Prosjekt opprettet -link til side-";
		$pnavn = strip_tags($_GET['prosjektnavn']);
		$pstatus = strip_tags($_GET['prosjektstatus']);
		$pkomponent = strip_tags($_GET['prosjektkomponent']);
		$ptext = strip_tags($_GET['prosjekttextarea']);
		$submit = strip_tags($_GET['submit']);
		$username = $_SESSION['username'];
		$date = date("Y-m-d");
		echo "<script>";
		echo "hideForm()";
		echo "</script>";
		
		if($submit){
			if($pnavn && $pstatus && $pkomponent && $ptext){
			} else {
				$infomsg = "info msg";
			}
		}
	}
	

?>

<html>
	<p><?php
		echo "dette er en test $komponent $pnavn";
		?></p>
</html>