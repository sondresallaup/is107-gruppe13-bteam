<html>
<head>
<?php
session_start();
include "mysql_connect.php";
?>
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
	
<form action="sletthovedkort.php" method="POST">
<?php
$tabell = "hovedkort"; //tabell

//hente alt fra tabell "hovedkort"
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {

?>
<input type="radio" name="ch1" value="<?php echo $rad['ID'] ?>" /> 
<?php echo " <b>Produsent:</b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['modell']; echo " ";
echo "<hr>";
}

?>
<input type="submit" value="slett" />
</form>
 </div> <!-- slutt på id=hovedkort -->

<div id="prosessor" class="tab_content">
	<form action="slettcpu.php" method="POST">
<?php
$tabell = "cpu"; //tabell

//hente alt fra tabell
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {

?>
<input type="radio" name="ch1" value="<?php echo $rad['ID'] ?>" />
<?php echo " <b>Produsent: </b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['formfaktor']; echo " ";
echo "<hr>";
}
?>
<input type="submit" value="slett" />
</form>
</div> <!-- slutt på id="prosessor" -->
 
     <div id="skjermkort" class="tab_content"> 
	 <form action="slettskjermkort.php" method="POST">
<?php
$tabell = "skjermkort"; //tabell

//hente alt fra tabell
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {

?>
<input type="radio" name="ch1" value="<?php echo $rad['ID'] ?>" /> 
<?php echo " <b>Produsent:</b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['modell']; echo " ";
echo "<hr>";
}

?>
<input type="submit" value="slett" />
</form>
 </div> <!-- slutt på id=skjermkort -->
 
 <div id="psu" class="tab_content">
 <p>placeholder</p>
 </div>
 
 <div id="kabinett" class="tab_content">
 <form action="slettkabinett.php" method="POST">
 <?php
 $tabell = "kabinett"; //tabell
 
 //hente alt fra tabell
 $hent = "SELECT * FROM $tabell";
 $liste = mysql_query($hent);
 
 //skriver ut tabellen
 while($rad = mysql_fetch_assoc($liste)) {
 
 ?>
 <input type="radio" name="ch1" value="<?php echo $rad['ID'] ?>" />
 <?php echo " <b>Produsent: </b>"; echo $rad['produsent']; echo " ";
 echo "<b>Modell: </b> "; echo $rad['modell']; echo " ";
 echo "<hr>";
 }
 
 ?>
 <input type="submit" value="slett" />
 </form>
 </div> <!-- slutt på id=kabinett -->
 
 <div id="minne" class="tab_content">
 <form action="slettminne.php" method="POST">
 <?php
 $tabell = "minne"; //tabell
 
 //hente alt fra tabell
 $hent = "SELECT * FROM $tabell";
 $liste = mysql_query($hent);
 
 //skriver ut tabellen
 while($rad = mysql_fetch_assoc($liste)) {
 
 ?>
 <input type="radio" name="ch1" value="<?php echo $rad['ID'] ?>" />
 <?php echo " <b>Produsent: </b>"; echo $rad['produsent']; echo " ";
 echo "<b> Modell: </b>"; echo $rad['modell']; echo " ";
 echo "<hr>";
 }
 
 ?>
 <input type="submit" value="slett" />
 </form>
 </div> <!-- slutt på id=minne -->
 
 </div> <!-- end class=tab_container --> 

</div> <!-- end id=container -->	

</body>
</html>