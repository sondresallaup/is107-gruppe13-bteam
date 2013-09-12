<?php

//serverinfo
$host = "mysql23int.stwadmin.net"; // hostnavn
$username = "u1010446_kennef"; //brukernavn
$password = "kenneth11"; //database passord
$db_name = "db1010446_pcbyggaren"; //database navn
$tabell = "cpu"; //tabell navn

$produsent = $_POST['produsent'];
$modell = $_POST['modell'];
$formfaktor = $_POST['formfaktor'];
$kjerner = $_POST['kjerner'];
$klokkehastighet = $_POST['klokkehastighet'];
$sokkel = $_POST['sokkel'];
$grafikk= $_POST['grafikk'];
$type = $_POST['type'];
$grunnfrekvens = $_POST['grunnfrekvens'];
$pris = $_POST['pris'];

//koble til database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

$send = "INSERT INTO $tabell(produsent, modell, formfaktor, kjerner, klokkehastighet, sokkel, grafikk, type, grunnfrekvens, pris)VALUES('$produsent','$modell','$formfaktor','$kjerner','$klokkehastighet','$sokkel','$grafikk','$type','$grunnfrekvens','$pris')";

$result = mysql_query($send) or die("cannot query");
if ($result)
 {
	echo "godkjent";
}
 else {
	echo "feilet" . mysql_error();
}
?>