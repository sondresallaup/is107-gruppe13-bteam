<html>
<head>
<?php
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
        <li  rel="hovedkort"> Hovedkort</li>
        <li rel="prosessor"> Prosessor</li>
        <li class="active" rel="skjermkort"> Skjermkort</li>
		<li rel="psu"> PSU</li>
		<li rel="kabinett"> Kabinett</li>
		<li rel="minne"> Minne</li>
    </ul>

<div class="tab_container"> 

     <div id="skjermkort" class="tab_content"> 
	 <?php

$tabell = "skjermkort"; //tabell navn

//hente alt fra tabell "skjermkort"
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {
echo "<input type='checkbox' name='test' /> <b>Produsent:</b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['modell']; echo " ";
echo "<hr>";
}

?>

 </div> <!-- end id=hovedkort -->
 
      <div id="hovedkort" class="tab_content"> 
	
<form action="sletthovedkort.php" method="post">
<?php
$tabell = "hovedkort"; //tabell

//hente alt fra tabell "skjermkort"
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {



echo "<input type='checkbox' name='test' /> <b>Produsent:</b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['modell']; echo " ";
echo "<hr>";
}

?>
<input type="submit" value="slett" />
</form>
 </div> <!-- end id=hovedkort -->
 
 <div id="minne" class="tab_content">
 
 </div>
 </div> <!-- end class=tab_container --> 

</div> <!-- end id=container -->	

</body>
</html>