<html>
<head>
<meta http-equiv="Refresh" 
 content="3; URL=leggtilkomponent.php">
</head>
<body>
<?php
session_start();
//serverinfo
$host = "mysql23int.stwadmin.net"; // hostnavn
$username = "u1010446_kennef"; //brukernavn
$password = "kenneth11"; //database passord
$db_name = "db1010446_pcbyggaren"; //database navn
$tabell = "minne"; //tabell navn

$produsent = $_POST['produsent'];
$modell = $_POST['modell'];
$lagringskapasitet = $_POST['lagringskapasitet'];
$type = $_POST['type'];
$produktformfaktor = $_POST['produktformfaktor'];
$minnehastighet = $_POST['minnehastighet'];
$ventetidstiming= $_POST['ventetidstiming'];
$pris = $_POST['pris'];

//koble til database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

$send = "INSERT INTO $tabell(produsent, modell, lagringskapasitet, type, produktformfaktor, minnehastighet, ventetidstiming, pris)VALUES('$produsent','$modell','$lagringskapasitet','$type','$produktformfaktor','$minnehastighet','$ventetidstiming','$pris')";

$result = mysql_query($send) or die("cannot query");
if ($result)
 {
	echo "godkjent";
}
 else {
	echo "feilet" . mysql_error();
}
?>
</body>
</html>