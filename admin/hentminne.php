<html>
<head>
</head>
<body>
<?php

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

$hent = "SELECT * FROM minne";
$liste = mysql_fetch_assoc($hent);

echo $liste;

/*
while($liste = mysql_fetch_array($hent))
{
echo .$liste['modell'];
}
*/
?>
</body>
</html>