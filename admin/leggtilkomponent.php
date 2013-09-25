﻿<html>
<head>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="teststyle.css">
<!-- jquery er et bibliotek med ferdig bygget JS kode -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Javascript koden som lager fanene -->
<!-- http://www.entheosweb.com/tutorials/css/tabs.asp -->
<script type="text/javascript" src="script.js"></script> 
<div id="container">

  <ul class="tabs"> 
        <li class="active" rel="hovedkort"> Hovedkort</li>
        <li rel="prosessor"> Prosessor</li>
        <li rel="skjermkort"> Skjermkort</li>
		<li rel="psu"> PSU</li>
		<li rel="kabinett"> Kabinett</li>
		<li rel="minne"> Minne</li>
    </ul>

<div class="tab_container"> 

     <div id="hovedkort" class="tab_content"> 
 
        <form 	action="hovedkortdb.php" method="post">
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="socket" placeholder="socket" /><br>
		<input type="text" 	name="pris" placeholder="pris" /><br>
		<input type="text" 	name="link" placeholder="link" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>

     </div><!-- end hovedkort -->
     <div id="prosessor" class="tab_content"> 

      <form 	action="cpudb.php" method="post">
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="formfaktor" placeholder="type/produktformfaktor" /><br>
		<input type="text" 	name="kjerner" placeholder="antall kjerner" /><br>
		<input type="text" 	name="klokkehastighet" placeholder="klokkehastighet" /><br>
		<input type="text" 	name="sokkel" placeholder="kompatibel prosessorsokkel" /><br>
		<input type="text" 	name="grafikk" placeholder="integrert grafikk" /><br>
		<input type="text"  name="type" placeholder="type" /><br>
		<input type="text"  name="grunnfrekvens" placeholder="grunnfrekvens" /><br>
		<input type="text"  name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>

     </div><!-- end prosessor -->
     <div id="skjermkort" class="tab_content"> 

      <form 	action="skjermkortdb.php" method="post">
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="busstype" placeholder="busstype" /><br>
		<input type="text" 	name="kjerneklokke" placeholder="kjerneklokke" /><br>
		Minne:<br>
		<input type="text" 	name="storrelse" placeholder="størrelse" /><br>
		<input type="text" 	name="teknologi" placeholder="teknologi" /><br>
		<input type="text" 	name="faktiskklokkehastighet" placeholder="faktisk klokkehastighet" /><br>
		<input type="text" 	name="bussbredde" placeholder="bussbredde" /><br>
		Systemkrav:<br>
		<input type="text" 	name="stromforsyning" placeholder="krav til strømforsyning" /><br>
		Dimensjoner: <br>
		<input type="text" name="lengde" placeholder="lengde" /><br>
		<input type="text" name="bredde" placeholder="bredde" /><br>
		<input type="text" name="hoyde" placeholder="høyde" /><br>
		<input type="text" name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>
     </div><!-- end skjermkort -->
     <div id="psu" class="tab_content"> 

      <form name="psu" action="psudb.php" method="post">
<input type="text" name="produsent" placeholder="produsent" /><br>
<input type="text" name="modell" placeholder="modell" /><br>
<input type="text" name="spesifikasjonssamsvar" placeholder="spesifikasjonssamsvar" /><br>
<input type="text" name="inngangsspenning" placeholder="inngangsspenning" /><br>
<input type="text" name="utgangsspenning" placeholder="utgangsspenning" /><br>
<input type="text" name="effektkapasitet" placeholder="effektkapasitet" /><br>
<input type="text" name="utgangsstrom" placeholder="utgangsstrøm" /><br>
<input type="text" name="PLUSsertifisering" placeholder="PLUS-sertifisering" /><br>
<B> Størrelse og vekt: </b><br>
<input type="text" name="bredde" placeholder="bredde" /><br>
<input type="text" name="dybde" placeholder="dybde" /><br>
<input type="text" name="hoyde" placeholder="høyde" /><br>
<input type="text" name="vekt" placeholder="vekt" /><br>
<input type="text" name="pris" placeholder="pris" /><br>
<input type="submit" name="submit" value="Legg til	" />
	</form> 
	
     </div><!-- end psu--> 
	 
	 <div id="kabinett" class="tab_content"> 

      <form 	action="kabinettdb.php" method="post">
		Grunnfunksjon med forskjellige størrelser: <br>
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="formfaktor" placeholder="formfaktor" /><br>
		<input type="text" 	name="hovedstorrelse" placeholder="hovedstørrelse" /><br>
		<input type="text" 	name="stottedehk" placeholder="støttede hovedkort" /><br>
		<input type="text" 	name="internebronner" placeholder="interne brønner" /><br>
		<input type="text" 	name="antallbronner" placeholder="antall fronttilgjengelige brønner" /><br>
		<input type="text" 	name="farge" placeholder="farge" /><br>
		<input type="text" 	name="vifter" placeholder="vifter" /><br>
		Ekspansjon / tilkoblinger: <br>
		<input type="text" name="ekspansjon" placeholder="ekspansjonsbrønner" /><br>
		<input type="text" name="grensesnitt" placeholder="grensesnitt" /><br>
		Størrelse: <br>
		<input type="text" name="bredde" placeholder="bredde" /><br>
		<input type="text" name="dybde" placeholder="dybde" /><br>
		<input type="text" name="hoyde" placeholder="høyde" /><br>
		<input type="text" name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>
     </div><!-- end kabinett -->
     
	<div id="minne" class="tab_content">
	
	<form 	action="minnedb.php" method="post">
		<b> Minne + teknologiindeling: </b><br>
		<input type="text" 	name="produsent" placeholder="produsent" size="30" /><br>
		<input type="text" 	name="modell" placeholder="modell" /><br>
		<input type="text" 	name="lagringskapasitet" placeholder="lagringskapasitet" /><br>
		<input type="text" 	name="type" placeholder="type" /><br>
		<input type="text" 	name="produktformfaktor" placeholder="produktformfaktor" /><br>
		<input type="text" 	name="minnehastighet" placeholder="minnehastighet" /><br>
		<input type="text" 	name="ventetidstiming" placeholder="ventetidstiming" /><br>
		<input type="text"  name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
	</form>
	
	</div><!-- end minne -->
 </div> <!-- end class=tab_container --> 

</div> <!-- end id=container -->	