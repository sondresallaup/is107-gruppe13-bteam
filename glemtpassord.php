<?php

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$submit = $_POST['submit'];

$email = $_POST['email'];

$outmessage = "";

if($submit){
	if($email){
	//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");
	
	$namecheck = mysql_query("SELECT username FROM users WHERE email='$email'");
	$count = mysql_num_rows($namecheck);
	
	
	if($count == 0){
	$outmessage = "Denne e-postadressen eksisterer ikke.";}
	
	
	
	else{
			//Genererer nytt passord
			$generatedpassword = randomPassword();
			//krypterer nytt passord
			$cryptgeneratedpassword = md5($generatedpassword);
		
			$query = mysql_query("
			UPDATE users SET password = '$cryptgeneratedpassword' WHERE email ='$email'");
			
			//sender e-post
			$to = $email;
			$subject = "Nytt passord - PC-byggaren";
			$message = "Ditt nye passord er ". $generatedpassword.". Du kan lage nytt passord i innstillinger";
			$from = "prosjekt.pcbyggaren@gmail.com";
			$headers = "Fra:" . $from;
			mail($to,$subject,$message,$headers);
			
			$outmessage= "Epost sendt.";
			}
			}

		else{
			$outmessage = "Skriv inn en e-postadresse";}
		}	
		
		
		
		
		
	
	

?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<form action='glemtpassord.php' method='POST'>	
		Skriv inn din e-postadresse: 
		<input type='text' name='email'>
		<input type='submit' name='submit' value='Send nytt passord'>

	<br> <?php echo $outmessage; ?>
</form>
	
</html>