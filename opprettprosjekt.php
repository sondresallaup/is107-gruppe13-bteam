<?php

session_start();

	if (!isset($_GET['submit'])){
		$msg = "Opprett ditt eget prosjekt!";
	} else {
		$msg = "Prosjekt opprettet -link til side-";
		echo "<script>";
		echo "hideForm()";
		echo "</script>";
	}
?>


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
		<input type="text" name="prosjektnavn" placeholder="Prosjektnavn" />
		<select name="prosjektstatus">
			<option value="prosjektferdig">Ferdig</option>
			<option value="prosjektwip" selected>Work In Progress</option>
			<option value="prosjektide">Idé</option>
		</select>
		<!-- knapper i form av <a> for å legge til / fjerne felt, styles senere -->
		<a href="#" onclick="leggTilKomponent()">Ny komponent!</a>
		<a href="#" onclick="fjernKomponent()">Fjern komponent!</a>
		<input type="text" name="prosjektkomponent" placeholder="Komponenter" />
		<input type="text" name="prosjektkomponent" placeholder="Komponenter" /> 
		<input type="text" name="prosjektkomponent" placeholder="Komponenter" /> 
		<input type="text" name="prosjektkomponent" placeholder="Komponenter" /> 
		
		<textarea name="Name" rows="10" cols="40" placeholder="Skriv litt om prosjektet" />
		
		<input type="submit" name="prosjektsubmit">Opprett Prosjekt</input>
		
	</form>
	<span id="nochildspan" style="display:none";></span>

</div>
		<!--JS funksjoner , bør legges i egen js fil og includes -->
<script> //funksjoner for å legge til og fjerne input felt under komponenter i formen..
	function leggTilKomponent(){
		var nyttprosjektform=document.getElementById("prosjektform");
		var nochild=document.getElementById("nochildspan");
		var nyinput=document.createElement("input");
		
		nyinput.setAttribute("type","text");
		nyinput.setAttribute("name","nyinputelem");
		nyinput.setAttribute("placeholder","Komponent");
		nyinput.style.display: "block";
		nochild.style.display: "none";
		
		nyttprosjektform.appendChild(nyinput);
	}
	
	function fjernKomponent(); {
		var nyttprosjektform=document.getElementById("prosjektform");
		var nochild=document.getElementById("nochildspan");
		var lastchild=nyttprosjektform.lastChild;
		
		if (lastchild){
			nyttprosjektform.removeChild(lastchild);
			nochild.style.display: "none";
		} else {
			nochild.style.display: "block";
			nochild.innerHTML: "Ingen flere felt å fjerne";
		}
	}
	
	function hideForm(){
		var nyttprosjektform=document.getElementById("prosjektform);
		nyttprosjektform.style.display = "none";
	}
	
</script>

</body>
</html>