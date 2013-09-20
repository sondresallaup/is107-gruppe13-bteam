<?php


$host = "mysql23int.stwadmin.net"; 		// hostnavn
$username = "u1010446_kennef"; 			//brukernavn
$password = "kenneth11"; 				//database passord
$db_name = "db1010446_pcbyggaren"; 		//database navn


// Kobler til database
mysql_connect("$host","$username","$password")or die("Kunne ikke koble til MYSQL. Kontakt utviklerne.");
mysql_select_db("$db_name")or die("Kunne ikke koble til database. Kontakt utviklerne.");


?>