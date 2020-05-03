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
<body onload="startGame()">

    <div id="header" class="container">
        <div id="logo">
            <h1><a href="index.php">Kakarat sykkii</a></h1>
        </div>
        <div id="page-nav">
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger"/>
            <ul>
                <li><a href="index.php" accesskey="1" title="">Etusivu</a></li>
                <li class="current_page_item"><a href="#" accesskey="2" title="">Pelilauta</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li>
                <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="9" title="">Luokka</a></li><?php } ?>
                <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a></li><?php } ?>
                <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="logOutUser" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
                <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="logOutUser" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
            </ul>
        </div>
    </div>
    <div id="welcome" class="wrapper-style1">
        <div class="title">
            <h2>Pelilauta</h2>
            <div id="peliarea"></div>
            <div><p id = "liikkuminen" ></p></div>
            <div id="nappulat">
                <button onclick="moveup()">UP</button>
                <button onclick="movedown()">DOWN</button>
                <button onclick="moveleft()">LEFT</button>
                <button onclick="moveright()">RIGHT</button>
            </div>
            <div>
                <button onclick="Dice()">Heitä noppaa</button>
                <button onclick="save()">tallenna tilanne</button>
                <button onclick="getsave()">hae vanha tilannne</button>
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
            <script src="peli/peli.js"  ></script>
            </body>
            </html>
            