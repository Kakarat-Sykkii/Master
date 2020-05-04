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
			<li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
            <li class="current_page_item"><a href="#" accesskey="4" title="">Vinkkejä liikuntaan</a></li><br/>
            <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="8" title="">Luokka</a></li><?php } ?>
            <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a></li><?php } ?>
			<?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
            <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
		</ul>
	</div>
</div>
<div id="welcome" class="wrapper-style1">
	<div class="title">
<h2>Liikunta on tärkeää kaikille</h2>
        <span class="byline">Tässä muutama vinkki, mitä voit tehdä kavereiden kanssa</span> 
    
    </div>

    <div id="portfolio" class="wrapper-style1">

      <div class="flexcon">   
        <div id="column1">
            <p style="height: 150px;"><a href="#" class="image image-full"><img src="images/pallo.jpeg" alt="kuva jalkapallosta" height="120px" width="80px" /></a></p>
            <p>Jalkapallon pelaaminen kavereiden kanssa on kivaa liikuntaa.</p>
            <a href="https://peda.net/sysma/nuoramoinen/kj/ps0a" class="button">Haluatko tietää lisää?</a> </div>
        <div id="column2">
            <p style="height: 150px;"><a href="" class="image image-full"><img src="images/hippa.png" alt="kuva lapsista leikkimässä hippaa" height="120px" width="80px"/></a></p>
            <p>Hipan leikkiminen on yksi parhaista tavoista kehittää nopeutta.</p>
            <a href="https://suomenleluyhdistys.fi/7-hauskaa-hippaa/" class="button">Haluatko tietää lisää?</a> </div>
        <div id="column3">
            <p style="height: 150px;"><a href="" class="image image-full"><img src="images/rotta.jpg" alt="kuva lapsista leikkimässä kirkonrottaa" height="120px" width="80px"/></a></p>
            <p>Kirkonrotassa yhdistyvät sekä nopeus että piilottelukyky.</p>
            <a href="https://leikkipankki.xn--leikkipiv-12ac.fi/Leikit/Tiedot/640" class="button">Haluatko tietää lisää?</a> </div>
        <div id="column4">
            <p style="height: 150px;"><a class="image image-full"><img src="images/häntä.jpg" alt="kuva lapsista leikkimässä hännänryöstöä" height="120px" width="80px"/></a></p>
            <p>Oletko koskaan pelannut hännän ryöstöä? Se on kivaa!</p>
            <a href="https://leikkipankki.xn--leikkipiv-12ac.fi/Leikit/Tiedot/633" class="button">Haluatko tietää lisää?</a> </div>
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
            <li><a href="faq.php" class="icon icon-question-sign"></a></li>
		</ul>
	</div>
        <p>&copy; 2013 Sitename.com. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>.</p>
    </div>
    </body>
    </html>
    