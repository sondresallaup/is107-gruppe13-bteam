<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username&&$password)
{

$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013" or die("Kan ikke koble til");
mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");



}

else
	die("Mangler brukernavn og passord");

?>