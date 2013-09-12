<?php

//serverinfo
$host = "mysql23int.stwadmin.net"; // hostnavn
$username = "u1010446_kennef"; //brukernavn
$password = "kenneth11"; //database passord
$db_name = "db1010446_pcbyggaren"; //database navn
$tabell = "skjermkort"; //tabell navn

$produsent = $_POST['produsent'];
$modell = $_POST['modell'];
$busstype = $_POST['busstype'];
$kjerneklokke = $_POST['kjerneklokke'];
$storrelse = $_POST['storrelse'];
$teknologi = $_POST['teknologi'];
$faktiskklokkehastighet= $_POST['faktiskklokkehastighet'];
$bussbredde = $_POST['bussbredde'];
$stromforsyning = $_POST['stromforsyning'];
$dimensjoner = $_POST['dimensjoner'];
$pris = $_POST['pris'];

//koble til database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

$send = "INSERT INTO $tabell(produsent, modell, busstype, kjerneklokke, storrelse, teknologi, faktiskklokkehastighet, bussbredde, stromforsyning, dimensjoner, pris)VALUES('$produsent','$modell','$busstype','$kjerneklokke','$storrelse','$teknologi','$faktiskklokkehastighet','$bussbredde','$stromforsyning','$dimensjoner','$pris')";

$result = mysql_query($send) or die("cannot query");
if ($result)
 {
	echo "godkjent";
}
 else {
	echo "feilet" . mysql_error();
}
?>