<html>
<head>
<meta http-equiv="Refresh" 
 content="3; URL=leggtilkomponent.php">
</head>
<body>
<?php

//serverinfo
$host = "mysql23int.stwadmin.net"; // hostnavn
$username = "u1010446_kennef"; //brukernavn
$password = "kenneth11"; //database passord
$db_name = "db1010446_pcbyggaren"; //database navn
$tabell = "kabinett"; //tabell navn

$produsent = $_POST['produsent'];
$modell = $_POST['modell'];
$formfaktor = $_POST['formfaktor'];
$hovedstorrelse = $_POST['hovedstorrelse'];
$stottedehk = $_POST['stottedehk'];
$internebronner = $_POST['internebronner'];
$antallbronner= $_POST['antallbronner'];
$farge = $_POST['farge'];
$vifter = $_POST['vifter'];
$ekspansjon = $_POST['ekspansjon'];
$grensesnitt = $_POST['grensesnitt'];
$bredde = $_POST['bredde'];
$dybde = $_POST['dybde'];
$hoyde = $_POST['hoyde'];
$pris = $_POST['pris'];

//koble til database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

$send = "INSERT INTO $tabell(produsent, modell, formfaktor, hovedstorrelse, stottedehk, internebronner, antallbronner, farge, vifter, ekspansjon, grensesnitt, bredde, dybde, hoyde, pris)VALUES('$produsent','$modell','$formfaktor','$hovedstorrelse','$stottedehk','$internebronner','$antallbronner','$farge','$vifter','$ekspansjon','$grensesnitt','$bredde','$dybde','$hoyde','$pris')";

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