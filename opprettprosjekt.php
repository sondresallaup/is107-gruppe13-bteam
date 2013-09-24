<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();



	if (!isset($_GET['submit'])){
		$msg = "Opprett ditt eget prosjekt!";
	} else {
		$msg = "Prosjekt opprettet -link til side-";
		$pnavn = strip_tags($_GET['prosjektnavn']);
		$pstatus = strip_tags($_GET['prosjektstatus']);
		$pkompnent = strip_tags($_GET['pkomponentinput']);
		$ptext = strip_tags($_GET['textprosjektarea']);
		$submit = strip_tags($_GET['submit']);
		$tabell = "brukerprosjekt";
		$username = $_SESSION['username'];
		$date = date("Y-m-d");
		echo "<script>";
		echo "hideForm()";
		echo "</script>";
		
		if($submit){
			if($pnavn && $pstatus && $pkomponent && $ptext){
				$connect = mysql_connect("mysql23int.stwadmin.net", "u1010446_root", "Bteam2013") or die("Kan ikke koble til");
				mysql_select_db("db1010446_pcbyggaren") or die("Kan ikke koble til db");
				
				$send = "INSERT INTO $tabell VALUES('', $username, $pnavn, $pstatus, $pkomponent, $ptext, '', $date)";
				$result= mysql_query($send) or die("Ble ikke sendt");
				if ($result) {
					$infomsg = "Success";
				} else {
					$infomsg = "Failure";
				}
				
			} else {
				$infomsg = "info msg";
			}
		}
	}
?>




		<!--JS funksjoner , bør legges i egen js fil og includes -->
<script> //funksjoner for å legge til og fjerne input felt under komponenter i formen..
	function leggTilKomponent(){
		var komponentdiv=document.getElementById("komponentinput");
		var nochild=document.getElementById("nochildspan");
		var nyinput=document.createElement("input");
		
		nyinput.setAttribute("type","text");
		nyinput.setAttribute("name","nyinputelem");
		nyinput.setAttribute("placeholder","Komponent");
		nyinput.style.display = "block";
		nochild.style.display = "none";
		
		komponentdiv.appendChild(nyinput);
	}
	
	function fjernKomponent(){
		var komponentdiv=document.getElementById("komponentinput");
		var nochild=document.getElementById("nochildspan");
		var lastchild=komponentdiv.lastChild;
		
		if (lastchild){
			komponentdiv.removeChild(lastchild);
			nochild.style.display = "none";
		} else {
			nochild.style.display = "block";
			nochild.innerHTML = "Ingen flere felt å fjerne";
		}
	}
	
	function hideForm(){
		var nyttprosjektform=document.getElementById("prosjektform");
		nyttprosjektform.style.display = "none";
	}
	
</script>


<!DOCTYPE html>
<html>
<head>
<!-- class er .  id er # -->
	<LINK REL="SHORTCUT ICON" HREF="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PC Byggaren</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	

</head>

<?php
include_once "mysql_connect.php"
?>

<!-- Vises ved trykk på "Opprett nytt prosjekt" på "Mine Prosjekter" sida ref index.php, endring i source i iframe ref funksjon i index.php. -->

<body>
	<div id="content">
	<h1>Opprett et prosjekt</h1>

	<p><?php echo $msg ?>
	<form action="#" method="get" id="prosjektform">
		<input type="text" name="prosjektnavn" placeholder="Prosjektnavn" /><br />
		<select name="prosjektstatus"><br />
			<option value="prosjektferdig">Ferdig</option>
			<option value="prosjektwip" selected>Work In Progress</option>
			<option value="prosjektide">Idé</option>
		</select>
		<!-- knapper i form av <a> for å legge til / fjerne felt, styles senere -->
		<a href="#" onclick="leggTilKomponent()">Ny komponent!</a>
		<a href="#" onclick="fjernKomponent()">Fjern komponent!</a><br />
		<div id="komponentinput">
			<input type="text" name="prosjektkomponent" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent" placeholder="Komponent" /> <br />
		</div>
		
		<textarea name="prosjekttextarea" rows="10" cols="40" placeholder="Skriv litt om prosjektet"></textarea><br />
		
		<input type="submit" name="submit">Opprett Prosjekt</input>
		
	</form>
	<span id="nochildspan" style="display:none";></span>

</div>

</body>
</html>