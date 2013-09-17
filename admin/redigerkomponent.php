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

<div id="container">

  <ul class="tabs"> 
        <li class="active" rel="hovedkort"> Hovedkort</li>
        <li rel="prosessor"> Prosessor</li>
        <li rel="skjermkort"> Skjermkort</li>
		<li rel="psu"> PSU</li>
		<li rel="kabinett"> Kabinett</li>
    </ul>

<div class="tab_container"> 

     <div id="skjermkort" class="tab_content"> 
	 <?php/*

//serverinfo
$host = "mysql23int.stwadmin.net"; // hostnavn
$username = "u1010446_kennef"; //brukernavn
$password = "kenneth11"; //database passord
$db_name = "db1010446_pcbyggaren"; //database navn
$tabell = "skjermkort"; //tabell navn

//koble til database
mysql_connect("$host","$username","$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select database");

//hente alt fra tabell "skjermkort"
$hent = "SELECT * FROM $tabell";
$liste = mysql_query($hent);

//skriver ut tabellen
while($rad = mysql_fetch_assoc($liste)) {
echo "<input type='checkbox' name='test' /> <b>Produsent:</b> "; echo $rad['produsent']; echo " ";
echo "<b>Modell:</b> "; echo $rad['modell']; echo " ";
echo "<hr>";
}

mysql_close()*/
?>

 </div> <!-- end id=hovedkort -->
 </div> <!-- end class=tab_container --> 

</div> <!-- end id=container -->	

</body>
</html>