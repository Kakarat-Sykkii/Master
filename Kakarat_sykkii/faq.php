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
<title>FAQ</title>
<meta name="keywords" content="" />	
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="accordion.css" rel="stylesheet" type="text/css" />
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
	//session_start();
?>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="index.php">Kakarat Sykkii</a></h1>
	</div>
    <div id="page-nav">
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger"/>
  
		<ul>
			<li><a href="#" accesskey="1" title="">Etusivu</a></li>
			<li><a href="pelilauta.php" accesskey="2" title="">Pelilauta</a></li>
			<li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
			<li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li>
			<?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="9" title="">Luokka</a></li><?php } ?>
			<?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a></li><?php } ?>
		</ul>
	</div>
</div>
<div id="welcome" class="wrapper-style1">
	<div class="title">
		<h2>Usein kysytyt kysymykset</h2>
		<main id="accordion">
            <section id="q1">
                <a href="#q1"><h2>Keitä te olette?</h2></a>
                <p>Me olemme kolme opiskelijaa kakarat sykkii- sovelluksen takana. Aatu, Ilkka ja Jussi</p>
            </section>

            <section id="q2">
                <a href="#q2"><h2>Kuka tuo komein on?</h2></a>
                <p>Se on Aatu</p>
            </section>

            <section id="q3">
                <a href="#q3"><h2>Miksi tälläinen sovellus?</h2></a>
                <p>Mietimme ryhmän kesken ennen projektin aloitusta tapaa, joka olisi hauska lapsille ja saisi nuoret liikkumaan, kuitenkin samalla täyttäen sykedata- vaatimuksen. Päätimme yhdistää ideat ja näin syntyi kakarat sykkii!</p>
            </section>

            <section id="q4">
                <a href="#q4"><h2>Miksi Kakarat sykkii?</h2></a>
                <p>Kakaroiden sykkiminen on meille tärkeää, sillä mitä enemmän on sykkimistä havaittavissa niin sitä enemmän lapset jaksavat käyttää aikaa ja keskittymistä opiskelemiseen, koulussa tulee nopeasti väsy jos ei liikuta kehoa.
                    Me tuomme ratkaisun tähän ikävään ongelmaan pelillistämällä liikkuminen ja tekemällä liikunnasta mukavan yhdessä tehtävän kilpailun
                </p>
            </section>

            <section id="q5">
                <a href="#q5"><h2>Voikohan tähän nyt luottaa ollenkaan!?</h2></a>
                <p>Kyllä voi</p>
            </section>
        </main>
    </div>
</div>	
        <div id="footer" class="container">
            <div>
                <div class="title">
                    <h2>Get in touch</h2>
                    <span class="byline">Hyödyllisiä linkkejä sinulle</span> </div>
                <ul class="contact">
                    <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                    <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                    <li><a href="#" class="icon icon-question-sign"></a></li>
                </ul>
            </div>
	<p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
</div>
</body>
</html>
