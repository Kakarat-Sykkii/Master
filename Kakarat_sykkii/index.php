<?php
	include_once("config/config.php");
	session_start();
	include_once("forms/register.php");
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
		<h1><a href="#">Kakarat sykkii</a></h1>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
			<li><a href="pelilauta.php" accesskey="2" title="">Pelilauta</a></li>
			<li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
			<li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li><br/>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			<li><a href="#" accesskey="6" title="" id="login">Log in</a></li>
			<li><a href="#" accesskey="7" title="" id="register">Register</a></li>
		</ul>
	</div>
</div>
<div id="welcome" class="wrapper-style1">
	<div class="title">
		<h2>Ryhmä 6 Sykkii</h2>
		<span class="byline">Ryhmäläiset: Ilkka Jussi Aatu</span> </div>
	<a href="#" class="image image-full"><img src="images/Aatu 10 v.jpeg" alt="" /></a>
	<p>This is <strong>UpRight</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>..   The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
</div>

<!--Login popup code-->
<div id="myModal" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Kirjaudu sisään</h2>
	  </div>
	  <div class="modal-body">
		<p>Voit kirjautua sisään tästä:</p>
		<p>Käyttäjätunnus: <input type="text" id="A" name="c"></p><br/>
		<p>Salasana: <input type="text" id="B" name="d"></p><br/>
		<p>Tästä pääsee kirjautumaan: <button type="button">Kirjaudu</button></p>
	  </div>
	  <div class="modal-footer">
		<h3>Kakarat sykkiiii</h3>
	  </div>
	</div>
</div>
<div id="myModal2" class="modal">
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Rekisteröidy</h2>
	  </div>
	  <div class="modal-body">
		<form method="post">
			<p>Voit rekisteröityä tästä:</p>
			<p>Luokan numero: <input type="text" name="gLuokkaID" placeholder="Luokan nro" maxlength="10"></p><br/>
			<p>Käyttäjätunnus: <input type="text" name="gUsername" placeholder="username min 4 chars" maxlength="40"></p><br/>
			<p>Nimi: <input type="text" name="gName" placeholder="Anna nimesi" maxlength="40"></p><br/>
			<p>Salasana: <input type="password" name="gPassword" placeholder="salasana max 40 merkkiä" maxlength="40"></p><br/>
			<p>Salasana: <input type="password" name="gPasswordVerify" placeholder="salasana uudelleen" maxlength="40"></p><br/>
			<p>Tästä pääsee rekisteröitymään: <input type="submit" name="submitUser" value="Rekisteröidy"></input></p>
		  </form>
	  </div>
	  <div class="modal-footer">
		<h3>Kakarat sykkiiii</h3>
	  </div>
	</div>
</div>

  

<div id="portfolio" class="wrapper-style1">
	<div class="title">
		<h2>Suspendisse lacus turpis</h2>
		<span class="byline">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span> </div>
	<div id="column1">
		<p><a href="#" class="image image-full"><img src="images/Aatu 10 v.jpeg" alt="" /></a></p>
		<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
		<a href="#" class="button">Read More</a> </div>
	<div id="column2">
		<p><a href="#" class="image image-full"><img src="images/Aatu 10 v.jpeg" alt="" /></a></p>
		<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
		<a href="#" class="button">Read More</a> </div>
	<div id="column3">
		<p><a href="#" class="image image-full"><img src="images/Aatu 10 v.jpeg" alt="" /></a></p>
		<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
		<a href="#" class="button">Read More</a> </div>
	<div id="column4">
		<p><a href="#" class="image image-full"><img src="images/Aatu 10 v.jpeg" alt="" /></a></p>
		<p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie.</p>
		<a href="#" class="button">Read More</a> </div>
</div>
<div id="page">
	<div id="content"></div>
	<div id="sidebar"></div>
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
<script>
	var modal = document.getElementById("myModal");
	var modal2 = document.getElementById("myModal2");   
  	var btn = document.getElementById("login");
	var btn2 = document.getElementById("register");
  	var span = document.getElementsByClassName("close")[0];
	btn.onclick = function() {
		modal.style.display = "block";
	}
	btn2.onclick = function() {
		modal2.style.display = "block";
	}
	span.onclick = function() {
		modal.style.display = "none";
		modal2.style.display = "none";
	}
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
		if (event.target == modal2) {
			modal2.style.display = "none";
		}
	}
</script>
</html>
