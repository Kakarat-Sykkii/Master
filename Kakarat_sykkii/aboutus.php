<?php
    include("config/start.php");
	include_once("config/config.php");
    include("includes/inav.php");
	/*session_start();*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : UpRight 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130526

-->
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="index.php">Kakarat sykkii</a></h1>
            </div>
            <div id="page-nav">
                <label for="hamburger">&#9776;</label>
                <input type="checkbox" id="hamburger"/>
                <ul>
                    <li><a href="index.php" accesskey="1" title="">Etusivu</a></li>
                    <li><a href="pelilauta.php" accesskey="2" title="">Pelilauta</a></li>
                    <li class="current_page_item"><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                    <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li>
                    <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="8" title="">Luokka</a></li><?php } ?>
                    <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a></li><?php } ?>
                    <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
                    <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
                </ul>
            </div>
        </div>
        <div id="welcome" class="wrapper-style1">
            <div class="title">
                <h2>Tietoa meistä</h2>
                <span class="byline">Miten me päädyttiin tänne </div>
            
            <p>Kakarat sykkii- sovelluksen 3 muskettisoturia </p>
        </span>
        </div>

        <div class="flexcon">
<div id="column1c">
		<p><img src="images/aatukomea.jpeg" class="usimage"alt="Kuva Aatusta" /></p>
        <p><strong>Aatu Kotanen</strong> Toisen vuoden opiskelija, positiivinen liikunnan ystävä</p> 
        <p><strong>Aatu.Kotanen@metropolia.fi</strong>
		<a href="#" class="button">Read More</a> </div>
	<div id="column2c">
		<p><img src="images/ilkka.jpeg"class="usimage" alt="Kuva Ilkasta" /></p>
        <p><strong>Ilkka Törmälä</strong> Toisen vuoden opiskelija, aina valmiina vastaamaan kysymyksiin.</p>
        <p><strong>Ilkka.Tormala@metropolia.fi</strong>
		<a href="#" class="button">Read More</a> </div>
	<div id="column3c">
		<p><img src="images/jussinaata.jpeg"class="usimage" alt="Kuva jussista" /></p>
        <p><strong>Jussi Salminen</strong> Toisen vuoden opiskelija, innokas ja auttavainen persoona.</p> 
        <p><strong>Jussi.Salminen2@metropolia.fi</strong>
		<a href="#" class="button">Read More</a> </div>
    </div>















        <div id="footer" class="container">
            <div>
                <div class="title">
                    <h2>Get in touch</h2>
                    <span class="byline">Phasellus nec erat sit amet nibh pellentesque congue</span> </div>
                <ul class="contact">
                    <li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
                    <li><a href="#" class="icon icon-facebook"><span></span></a></li>
                    <li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
                    <li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
                    <li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
                </ul>
            </div>
            <p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
        </div>
        </body>
        </html>
        