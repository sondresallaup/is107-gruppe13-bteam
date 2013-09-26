<html>
<head>
	<meta http-equiv="Refresh" content="1; URL=leggtilkomponent.php">
</head>
<body>
	<?php
		//serverinfo
		$host = "mysql23int.stwadmin.net"; // hostnavn
		$username = "u1010446_kennef"; //brukernavn
		$password = "kenneth11"; //database passord
		$db_name = "db1010446_pcbyggaren"; //database navn
		$tabell = "psu"; //tabell navn

		$produsent = $_POST['produsent'];
		$modell = $_POST['modell'];
		$spesifikasjonssamsvar = $_POST['spesifikasjonssamsvar'];
		$inngangsspenning = $_POST['inngangsspenning'];
		$utgangsspenning = $_POST['utgangsspenning'];
		$effektkapasitet = $_POST['effektkapasitet'];
		$utgangsstrom= $_POST['utgangsstrom'];
		$sertifisering = $_POST['PLUSsertifisering'];
		$bredde = $_POST['bredde'];
		$dybde = $_POST['dybde'];
		$hoyde = $_POST['hoyde'];
		$vekt = $_POST['vekt'];
		$pris = $_POST['pris'];

		//koble til database
		mysql_connect("$host","$username","$password")or die("cannot connect to server");
		mysql_select_db("$db_name")or die("cannot select database");

		$send = "INSERT INTO $tabell(Produsent, Modell, Spesifikasjonssamsvar, inngangsspenning, utgangsspenning, effektkapasitet, utgangsstrom, sertifisering, bredde, dybde, hoyde, vekt, pris)VALUES('$produsent','$modell','$spesifikasjonssamsvar','$inngangsspenning','$utgangsspenning','$effektkapasitet','$utgangsstrom','$sertifisering','$bredde','$dybde','$hoyde','$vekt','$pris')";

		$result = mysql_query($send) or die("cannot query");
		if ($result) 
		{
			echo "godkjent";
		} 
		else 
		{
			echo "feilet" . mysql_error();
		}
	?>
</body>
</html>