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
    include("includes/inav.php");
	/*session_start();*/
?>

    <div id="header" class="container">
        <div id="logo">
            <h1><a href="index.html">Kakarat sykkii</a></h1>
        </div>
        <div id="page-nav">
            <label for="hamburger">&#9776;</label>
            <input type="checkbox" id="hamburger"/>
            <ul>
                <li><a href="index.php" accesskey="1" title="">Etusivu</a></li>
                <li><a href="#" accesskey="2" title="">Pelilauta</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li>
                <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="luokka.php" accesskey="9" title="">Luokka</a></li><?php } ?>
                <?php if($_SESSION['ologgedIn']=="yes"){ ?><li class="current_page_item"><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a></li><?php } ?>
                <?php if($_SESSION['sloggedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
                <?php if($_SESSION['ologgedIn']=="yes"){ ?><li><a href="logOutUser.php" accesskey="8" title="">Kirjaudu ulos</a></li><?php } ?>
            </ul>
        </div>
    </div>
    <div id="welcome" class="wrapper-style1">
        <div class="title">
            <h2>Pistelaskuri oppilaille</h2>
        </div>
    </div>
    <div class ="enmuista">
        <fieldset>        
    <form method="post">
        <p>
            Anna keskisyke: <input type="text" name="givenHBR"/>
        </p>
        <p>
            <input type="submit" name="submitpisteet" value="Lisää"/>
        </p>
    </form>
    <?php
        if(isset($_POST['submitpisteet'])){
            $_SESSION['HBR']=$_POST['givenHBR'];
            $divident = $_SESSION['HBR']; 
            echo("jakaja" . $_SESSION['HBR']);
            $divirer = 15; 
            $data['opisteet'] = floor($divident / $divirer); 
            //$_SESSION['Pisteet'] = floor($divident / $divirer); 
            //$data['opisteet'] = $_SESSION['Pisteet'];
            $data['toimi'] = $_SESSION['oID'];
            $STH = $DBH->prepare("UPDATE KS_oppilas SET Pisteet = :opisteet WHERE OppilasID = :toimi ");
            $STH->execute($data);
            //Palataan takaisin tälle sivulle
            //header("Location: pistelaskuri.php");
        }
        echo("<p> Sinun id:si ON: </p>" .$_SESSION['oID']);
        //echo($_POST['givenHBR'] / $divirer);
    ?>
    </fieldset>
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