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
            <h1><a href="index.html">Kakarat sykkii</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php" accesskey="1" title="">Etusivu</a></li>
                <li><a href="#" accesskey="2" title="">Pelilauta</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li><br/>
                <li><a href="luokka.php" accesskey="5" title="">Luokka</a></li>
                <li class="current_page_item"><?php if($_SESSION['ologgedIn']=="yes"){ ?><a href="pistelaskuri.php" accesskey="10" title="">Pistelaskuri</a><?php } ?></li>
                <li><?php if($_SESSION['sloggedIn']=="yes"){ ?><a href="logOutUser" accesskey="8" title="">Kirjaudu ulos</a><?php } ?></li>
            </ul>
        </div>
    </div>
    <div id="welcome" class="wrapper-style1">
        <div class="title">
            <h2>Pistelaskuri oppilaille</h2>
        </div>
    </div>        
    <form method="post">
        <p>
            Anna keskisyke: <input type="text" name="givenHBR"/>
        </p>
        <p>
            <input type="submit" name="submitpisteet" value="Lisää"/>
        </p>
    </form>
    <?php
        
        $_SESSION['HBR']=$_POST['givenHBR'];
        $dividend = $_SESSION['HBR']; 
        $divisor = 15; 
        $_SESSION['Pisteet'] = intdiv($dividend, $divisor); 
        /*echo("$_SESSION['Pisteet']");*/
        
        if(isset($POST['submitpisteet'])){
            $data['opisteet'] = $_SESSION['Pisteet'];
            try{
                //kysely
                $STH = $DBH->prepare("UPDATE KS_oppilas SET Pisteet = 'opisteet' WHERE OppilasID = " . "'".$_SESSION['oID']."'");
                $STH->execute($data);
                //Palataan takaisin tälle sivulle
                header("Location: pistelaskuri.php");
            } catch(PDOException $e) {
                file_put_contents('log/DBErrors.txt', 'studentadder.php: '.$e->getMessage()."\n", FILE_APPEND);
                echo "Tallennusvirhe: " . $e->getMessage();
            }
        }
    ?>

</body>
</html>