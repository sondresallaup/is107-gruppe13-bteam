<?php
session_start();
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


	<!-- Hovedindex for webapplikasjon. -->
	

	<!-- Funksjon for endring av source i iframe. -->
	<script>
	
		function updateForside(){
			document.getElementById("iframewindow").src="forside.php"
		}
		
		function updateProfil(){
			document.getElementById("iframewindow").src="minprofil.php"
		}

		function updateProsjekter(){
			document.getElementById("iframewindow").src="prosjekter.php"
		}

		function updateKontakt(){
			document.getElementById("iframewindow").src="kontakt.php"
		}

		function updateBygg(){
			document.getElementById("iframewindow").src="bygg.php"
		}
		function updateRegistrering(){
			document.getElementById("iframewindow").src="registrer.php"
		}
		function updateInnstillinger(){
			document.getElementById("iframewindow").src="innstillinger.php"
		}
		function updateGlemtPassord(){
			document.getElementById("iframewindow").src="glemtpassord.php"
			}
		function updateMineProsjekter(){
			document.getElementById("iframewindow").src="mineprosjekter.php"
		}
		
	</script>


<body>
<div id="content">


	<!-- Tittel. -->
	<div class="header">	
		<h1><a href="#" onclick="updateForside()"><abbr title="Forside">PC Byggaren</abbr></a></h1>
	</div>


	<!-- Topp-menyen. Klikk menyvalg = execute funksjon for endring av iframe-source ref linje 15-27. -->
	<div class="menutop">
		<ul>
			<?php if($_SESSION['loggedin']) {echo '<li class="top"><a class="menu" href="#" onclick="updateProfil()"><abbr title="Min Profil">Min Profil</abbr></a></li>';} 
			if($_SESSION['usertype']) {echo '<li class="top"><a class="menu" href="/admin/index.php"<abbr title="Admin">Admin</abbr></a></li>';}?>
			<li class="top"><a class="menu" href="#" onclick="updateProsjekter()"><abbr title="Prosjekter">Prosjekter</abbr></a></li>
			<li class="top"><a class="menu" href="#" onclick="updateKontakt()"><abbr title="Kontakt">Kontakt</abbr></a></li>
			<li class="top"><a class="menu" href="#" onclick="updateBygg()""><abbr title="Bygg">Bygg</abbr></a></li>
			<li class="login"><?php if($loggedin) {echo "Welcome ".$_SESSION['username'];} ?> </li>
		</ul>
	</div>


	<!-- Hovedvinduet embedded via iframe. -->
	<iframe id="iframewindow" scrolling="no" src="forside.php" width="790"; height="600";></iframe>
	
	<!-- div mainwindow som kan brukes når vi fjerner iFrame.. Stylet og kommentert ut i css
	<div id="mainwindow">
		<p>hovedvindu</p>
	</div>
	-->

	
	<!-- Sidemeny -->
	<div class="sidebar">
		<ul>
		<!-- Login-input -->

		<form method="POST" action="login.php" method="POST">
			<?php if(!$_SESSION['loggedin']): ?>
	
			<li><br>Brukernavn: <input type="text" name="username"></li>
			<li>Passord: <input type="password" name="password"></li>
			<li><input type="submit" value="Logg inn"></li>
			<br><?php echo $_SESSION['outmessage']; ?>
			<li><a href="#" onclick="updateRegistrering()"> Registrér deg! </li>
			<li><a href="#" onclick="updateGlemtPassord()"> Glemt passord? </a></li>
			<?php endif; ?>
			<!-- Innhold avhengig av innloggingsstatus -->
			<?php if($_SESSION['loggedin']): ?>
			<li><br>Når logget inn:</li>
			<li>Mine PC'er</li>
			<li>Mitt galleri</li>
			<li><a href="#" onclick="updateMineProsjekter()"> Mine prosjekter</li>
			<li><a href="#" onclick="updateInnstillinger()"> Innstillinger </li>
			<li>Upload</li>
			<li>Forum</li><br><br>
			<!-- Logg ut-knapp -->
			<!-- <li><button onclick="logout()">Logg ut</button> -->
			<li><a href="logout.php"> Logg ut </li>
			
			
			<?php endif; ?>
			
			</ul>
		</form>
	</div>


	<div id="clear"></div>
	
	<div id="footer">
		<p>Footer</p>
	</div>



</div>
</body>
</html>