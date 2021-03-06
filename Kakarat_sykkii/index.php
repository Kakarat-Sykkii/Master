<!DOCTYPE html>

<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : UpRight 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130526

-->
<html lang="fi" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kakarat Sykkii</title>
<meta name="keywords" content="" />	
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<?php
	include("config/start.php");
	include_once("config/config.php");
	include_once("forms/register.php");
	include_once("forms/login.php");
	include_once("forms/logino.php");
	include("includes/inav.php");
	session_start();
?>
<div id="header" class="container">
	<div id="logo">
        <h1><a href="#">Kakarat sykkii</a></h1>
        <div id="login2">
			<ul>
			<?php
			if($_SESSION['sloggedIn']=="yes" || $_SESSION['ologgedIn']=="yes"){
			?>
				<li><a href="logOutUser" accesskey="8" >Kirjaudu ulos</a></li>
			<?php
			} else {
			?>	
        		<li><a href="#" accesskey="6" id="login">Opettaja</a></li>
				<li><a href="#" accesskey="6" id="logino">Oppilas</a></li>
				<li><a href="#" accesskey="7"  id="register">Rekisteröidy</a></li>
			<?php
			}
			?>	
    		</ul>
		</div>
    </div>
        
	<div id="page-nav">
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger"/>
  
		<ul>
			<li class="current_page_item"><a href="#" accesskey="1">Etusivu</a></li>
			<li><a href="pelilauta.php" accesskey="2">Pelilauta</a></li>
			<li><a href="aboutus.php" accesskey="3">Tietoa meistä</a></li>
			<li><a href="vinkkeja.php" accesskey="4">Vinkkejä liikuntaan</a></li>
			<?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="9">Luokka</a></li><?php } ?>
			<?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="pistelaskuri.php" accesskey="10">Pistelaskuri</a></li><?php } ?>
		</ul>
	</div>
</div>
<div id="welcome" class="wrapper-style1">
	<div class="title">
		<h2>Ryhmä 6 Sykkii</h2>
		<span class="byline">Ryhmäläiset: Ilkka, Jussi & Aatu</span> </div>
	<a href="#" class="image image-eifull"><img src="images/lapset2.jpg" alt="kuva lapsista leikkimässä" /></a>
    <p class="pkapee"><strong>Kakarat Sykkii</strong>- sovelluksen on tarkoitus saada sinut ja sinun kaverisi liikkumaan yhdessä, ja liikunnan avulla tavoitella mahtavia palkintoja jännittävässä kilpailussa.
    Liikunta on tärkeää kaikille, varsinkin lapsille. Koulupäivät voivat joskus tuntua pitkiltä ja tylsiltä mutta liikunnan avulla mieli pysyy virkeänä ja jaksaa oppia uusia asioita!
    <a>Ota siis rohkeasti ystäväsi mukaan ja tule kokeilemaan!</a></p>
</div>

<!--Login popup code-->
<div id="myModal" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Kirjaudu sisään</h2>
	  </div>
	  <div class="modal-body">
	  	<form method="post">
			<p>Voit kirjautua sisään tästä:</p>
			<p>Sähköposti: <input type="text" name="givenEmail" placeholder="S-posti" maxlength="40"> <br/></p>
			<p>Salasana: <input type="password" name="gPassword" placeholder="Salasanasi"> <br/></p>
			<p>Tästä pääsee kirjautumaan: <input type="submit" name="submitOpe" value ="Kirjaudu"></p>
			<p>Palaa etusivulle: <input type="submit" name="submitBack" value="lopetus"/></p>
		</form>
	  </div>
	  <div class="modal-footer">
		<h3>Kakarat sykkiiii</h3>
	  </div>
	</div>
</div>
<!--Register popup code-->
<div id="myModal2" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Rekisteröidy</h2>
	  </div>
	  <div class="modal-body">
		<form method="post">
			<p>Voit rekisteröityä tästä:</p>
			<!--<p>Luokan numero: <input type="text" name="gLuokkaID" placeholder="Luokan nro" maxlength="10"></p><br/>-->
			<p>Sähköpostiosoite: <input type="text" name="givenEmail" placeholder="Sähköpostiosoite" maxlength="40"><br/></p>
			<p>Nimi: <input type="text" name="gName" placeholder="Anna nimesi" maxlength="40"><br/></p>
			<p>Salasana: <input type="password" name="gPassword" placeholder="salasana max 40 merkkiä" maxlength="40"><br/></p>
			<p>Salasana: <input type="password" name="gPasswordVerify" placeholder="salasana uudelleen" maxlength="40"><br/></p>
			<p>Tästä pääsee rekisteröitymään: <input type="submit" name="submitUser" value="Rekisteröidy"/></p>
		  </form>
	  </div>
	  <div class="modal-footer">
		<h3>Kakarat sykkiiii</h3>
	  </div>
	</div>
</div>
<!--Oppilas login popup code-->
<div id="myModal3" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Kirjaudu sisään</h2>
	  </div>
	  <div class="modal-body">
		<form method="post">
			<p>Kirjaudu sisään tästä:</p>
			<p>Tunnus: <input type="text" name="goName" placeholder="Anna nimesi" maxlength="40"><br/></p>
			<p>Salasana: <input type="password" name="goPassword" placeholder="salasana max 40 merkkiä" maxlength="40"><br/></p>
			<p>Kirjaudu tästä napista: <input type="submit" name="submitStudent" value="Kirjaudu"/></p>
			<p>Palaa etusivulle: <input type="submit" name="submitBack" value="paluu"/></p>
		  </form>
	  </div>
	  <div class="modal-footer">
		<h3>Kakarat sykkiiii</h3>
	  </div>
	</div>
</div>
  


<div id="page">
	<div id="content"></div>
	<div id="sidebar"></div>
</div>
<div id="footer" class="container">
	<div>
		<div class="title">
			<h2>Get in touch</h2>
			<span class="byline">Hyödyllisiä linkkejä sinulle</span> </div>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="icon icon-facebook"><span></span></a></li>
            <li><a href="faq.php" class="icon icon-question-sign"></a></li>
		</ul>
	</div>
	<p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>

<script>
	var modal = document.getElementById("myModal");
	var modal2 = document.getElementById("myModal2");
	var modal3 = document.getElementById("myModal3");     
  	var btn = document.getElementById("login");
	var btn2 = document.getElementById("register");
	var btn3 = document.getElementById("logino");
  	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
		modal.style.display = "block";
	}
	btn2.onclick = function() {
		modal2.style.display = "block";
	}
	btn3.onclick = function() {
		modal3.style.display = "block";
	}
	span.onclick = function() {
		modal.style.display = "none";
		modal2.style.display = "none";
		modal2.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		if (event.target == modal2) {
			modal2.style.display = "none";
		}
		if (event.target == modal3) {
			modal3.style.display = "none";
		}
	}
</script>

</body>
</html>
