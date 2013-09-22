<?php

$submit = $_POST['submit'];

$username = strtolower($_POST['username']);

$outmessage = "";

if($submit){
	if($username){
	//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");
	
	$namecheck = mysql_query("SELECT username FROM users WHERE username='$username'");
	$count = mysql_num_rows($namecheck);
	
	
	if($count == 0){
	$outmessage = "Denne brukeren eksisterer ikke. <a href=../registrer.php> Registrér </a> ny bruker";}
	
	
	
	else{
		
			$query = mysql_query("
			UPDATE users SET usertype = 'admin' WHERE username ='$username'");
			
			$outmessage = $username . " er blitt admin";}
			}

		else{
			$outmessage = "Skriv inn et brukernavn";}
		}	
		
		
		
		
		
	
				
	
	
				
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<h1>Gjør admin</h1>
<div>

<form action='registrer.php' method='POST'>

	<table>
		<tr>
			<td>
			Brukernavn
			</td>
			<td>
			<input type='text' name='username' value='<?php echo $username; ?>'>
			</td>
		</tr>
		
	</table>
	<p>
	<input type='submit' name='submit' value='Gjør admin'>

	<br> <?php echo $outmessage; ?>
</form>

</div>
</html>