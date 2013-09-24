<?php

session_start();



$username = strtolower($_POST['username']);
$password = $_POST['password'];
$loggedin = FALSE;
$_SESSION['outmessage'] = "";


//Sjekker om brukernavn og passord er skrevet inn
if($username&&$password){
	
	//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");

	$query = mysql_query("SELECT * FROM users WHERE username='$username'");

	$numrows = mysql_num_rows($query);
		
		//Sjekker om brukernavnet eksisterer
		if ($numrows!=0){

			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($query)){

				$dbid = $row['id'];
				$dbusername = $row['username'];
				$dbpassword = $row['password'];	
				$dbusertype = $row['usertype'];
				$dbfirstname = $row['firstname'];
				$dblastname = $row['lastname'];
				$dbemail = $row['email'];
				$dbdate = $row['date'];
			}
					//Sjekker samsvar mellom brukernavn og passord
					if ($username==$dbusername&&md5($password)==$dbpassword){
						
						$loggedin = TRUE;
						$_SESSION['id']=$dbid;
						$_SESSION['username']=$dbusername;
						$_SESSION['loggedin']=$loggedin;
						$_SESSION['usertype']=$dbusertype;
						$_SESSION['firstname']=$dbfirstname;
						$_SESSION['lastname']=$dblastname;
						$_SESSION['email']=$dbemail;
						$_SESSION['date']=$dbdate;
						
						
						
						$_SESSION['outmessage'] = "Pålogget!";


						}
					else
						$_SESSION['outmessage'] = "Ugyldig passord";

					}

			else
				$_SESSION['outmessage'] = "Brukeren eksisterer ikke";


		}


header('Location: index.php');
	
	

?>