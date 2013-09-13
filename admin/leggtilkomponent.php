<html>
<head>
<link rel="stylesheet" type="text/css" href="teststyle.css">
<!-- jquery er et bibliotek med ferdig bygget JS kode -->
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<!-- Javascript koden som lager fanene -->
<!-- http://www.entheosweb.com/tutorials/css/tabs.asp -->
<script type="text/javascript">
$(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});

</script> 
<title>PC Byggaren</title>
<meta charset="UTF-8">
</head>
<body>
<div id="content">
<div class="header">	
	<h1><a id="header" href="index.php"><abbr title="Forside">PC Byggaren</abbr></a></h1>
</div>

<div class="menutop">
	<ul>
	<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateProsjekt()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
	<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
	<li class="top"><a class="menu" href="bygg.php" target="_blank"><abbr title="Bygg">Bygg</abbr></a></li>
</ul>
</div>


<!-- her vil hoveddelen av adminsiden ligge -->
<div class="infowindow">

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
 
        <form 	action="hovedkort.php" method="post">
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

      <form 	action="skjermkort.php" method="post">
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
		<input type="text" name="dimensjoner" placeholder="l*b*h" /><br>
		<input type="text" name="pris" placeholder="pris" /><br>
		<input type="submit" name="add" value="Legg til" />
</form>
     </div><!-- end skjermkort -->
     <div id="psu" class="tab_content"> 

      <form name="psu" action="psudb.php" method="post">
<input type="text" name="produsent" placeholder="produsent" /><br>
<input type="text" name="modell" placeholder="modell" /><br>
<input type="text" name="enhetstype" placeholder="enhetstype" /><br>
<input type="text" name="spesifikasjonssamsvar" placeholder="spesifikasjonssamsvar" /><br>
<input type="text" name="inngangsspenning" placeholder="inngangsspenning" /><br>
<input type="text" name="inngangsspenningsverdiområde" placeholder="inngangsspenningsverdiområde" /><br>
<input type="text" name="frekvens" placeholder="frekvens" /><br>
<input type="text" name="detaljer" placeholder="detaljer" /><br>
<input type="text" name="utgangsspenning" placeholder="utgangsspenning" /><br>
<input type="text" name="effektkapasitet" placeholder="effektkapasitet" /><br>
<input type="text" name="utgangsstrøm" placeholder="utgangsstrøm" /><br>
<input type="text" name="PLUSsertifisering" placeholder="PLUS-sertifisering" /><br>
<input type="text" name="kjølesystem" placeholder="kjølesystem" /><br>
<input type="text" name="egenskaper" placeholder="egenskaper" /><br>
<input type="text" name="tilpassetstandard" placeholder="tilpasset standard" /><br>
<input type="text" name="energystar" placeholder="energy star" /><br>
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

</div>

<div class="sidebar">
	<ul>
	<li>Legg til komponenter</li><br>
	<li>Endre/Fjerne Komponenter</li><br>
	<li>Galleri</li><br>
	<li>PCer</li><br>
	<li>Innlegg</li><br>
	<li>Instillinger</li><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<li>Logg ut</li><br>
	</ul>
</div>

</div>
</body>
</html>