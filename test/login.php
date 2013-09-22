<?php



$username = $_POST['username'];
$password = $_POST['password'];



if($username&&$password){

	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$query = mysql_query("SELECT * FROM brukere WHERE brukernavn='$username'");

	$numrows = mysql_num_rows($query);

		if ($numrows!=0){

			while ($row = mysql_fetch_assoc($query)){

				$dbusername = $row['brukernavn'];
				$dbpassword = $row['passord'];	
			}

					if ($username==$dbusername&&$password==$dbpassword){


						echo "Pålogget!";


						}
					else
						echo "Ugyldig passord";

					}

			else
				die("Brukeren eksisterer ikke");


		}

else
	die("Mangler brukernavn og/eller passord");
	

?>