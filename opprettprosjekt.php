<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();




	//henter prosjektinfo og legger den i brukermappen
	$id = $_SESSION['id'];
	$file = file_get_contents('./prosjektinfo.php', true);
	$fp = fopen("./brukerfiler/$id/prosjektinfo.php","w+");
 
 	//velger hvor du skal legge filen, og hvilken fil som skal legges deg. Definert ovenfor
	fwrite($fp, $file);
	//lukker mappen
	fclose($fp);

?>

<!DOCTYPE html>
<html>
<head
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

	<form action="prosjektinfo.php" method="get" id="prosjektform">
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
			<input type="text" name="prosjektkomponent[]" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent[]" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent[]" placeholder="Komponent" /> <br />
			<input type="text" name="prosjektkomponent[]" placeholder="Komponent" /> <br />
		</div>
		
		<textarea name="prosjekttextarea" rows="10" cols="40" placeholder="Skriv litt om prosjektet"></textarea><br />
		
		<input type="submit" name="submit">Opprett Prosjekt</input>
		
	</form>
	<span id="nochildspan" style="display:none";></span>

</div>

		<!--JS funksjoner , bør legges i egen js fil og includes -->
<script> //funksjoner for å legge til og fjerne input felt under komponenter i formen..
	function leggTilKomponent(){
		var komponentdiv=document.getElementById("komponentinput");
		var nochild=document.getElementById("nochildspan");
		var nyinput=document.createElement("input");
		
		nyinput.setAttribute("type","text");
		nyinput.setAttribute("name","prosjektkomponent[]");
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
	
</script>



</body>
</html>