<?php

$submit = $_POST['submit'];

$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);

$username = strtolower(strip_tags($_POST['username']));

$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);

$email = strip_tags($_POST['email']);
$date = date("Y-m-d");

$outmessage = "";

if($submit){
	//Kobler til databasen
	$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root","Bteam2013") or die("Kan ikke koble til");
	mysql_select_db("db1010446_pcbyggaren") or die("Finner ikke db");
	
	$namecheck = mysql_query("SELECT username FROM users WHERE username='$username'");
	$count = mysql_num_rows($namecheck);
	
	if($count != 0){
	$outmessage = "Dette brukernavnet er opptatt";}
	
	else{

	if($firstname&&$lastname&&$username&&$password&&$repeatpassword&&$email){
		
		
		if(strlen($password)>30||strlen($password)<6){
		
			$outmessage = "Passordet må være mellom 6 og 30";}
			
		else{
		
		//krypterer
		$password = md5($password);
		$repeatpassword = md5($repeatpassword);
		
		if(strlen($firstname)>30||strlen($lastname)>30||strlen($username)>16){
				
				$outmessage = "Navn og/eller brukernavn er for langt";}
			
		else{
		

		if($password==$repeatpassword){
		
			//Setter ny bruker inn i db
			$query = mysql_query("
			INSERT INTO users VALUES ('','$username','$password','$email','$firstname','$lastname','basic','$date')");
			
			$queryselect = mysql_query("SELECT * FROM users WHERE username='$username'");
			
			//Tar ut data fra db
			while ($row = mysql_fetch_assoc($queryselect)){

				$dbid = $row['id']; }
			
			//oppretter brukermappe
/*
 * Created on 24. sep. 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 $listephp="folder.jpg";
 $dest="./upload/$dbid/$listephp";
 mkdir("./upload/$dbid", 0777);
echo "Mappen ble laget! <br>";
copy ("$listephp" , "$dest");
echo "<b> $listephp </b> <u>f</u><i>lyttet</i> til $dest";




			
				
			$outmessage = "Du er blitt registrert";}

		else{
			$outmessage = "Passordene er ikke like";}
			
		
		}
		
		
		}
	}else
				$outmessage = "Fyll ut alle felt";}
	
	
				}
?>

<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<h1>Registrér deg</h1>
<div>

<form action='registrer.php' method='POST'>

	<table>
		<tr>
			<td>
			Fornavn
			</td>
			<td>
			<input type='text' name='firstname' value='<?php echo $firstname; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Etternavn
			</td>
			<td>
			<input type='text' name='lastname' value='<?php echo $lastname; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Brukernavn
			</td>
			<td>
			<input type='text' name='username' value='<?php echo $username; ?>'>
			</td>
		</tr>
		<tr>
			<td>
			Passord
			</td>
			<td>
			<input type='password' name='password'>
			</td>
		</tr>
		<tr>
			<td>
			Gjenta passord
			</td>
			<td>
			<input type='password' name='repeatpassword'>
			</td>
		</tr>
		<tr>
			<td>
			E-post-adresse
			</td>
			<td>
			<input type='text' name='email' value='<?php echo $email; ?>'>
			</td>
		</tr>
	</table>
	<p>
	<input type='submit' name='submit' value='Registrér'>

	<br> <?php echo $outmessage; ?>
</form>

</div>
</html>