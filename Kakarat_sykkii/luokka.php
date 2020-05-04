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
        <div id="page-nav">
            <label for="hamburger">&#9776;</label>
            <input type="checkbox" id="hamburger"/>
            <ul>
                <li><a href="index.php" accesskey="1" title="">Etusivu</a></li>
                <li><a href="pelilauta.php" accesskey="2" title="">Pelilauta</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li><br/>
                <li class="current_page_item"><?php if($_SESSION['sloggedIn']=="yes"){ ?><a href="luokka.php" accesskey="9" title="">Luokka</a><?php } ?></li>
                <li><?php if($_SESSION['sloggedIn']=="yes"){ ?><a href="logOutUser" accesskey="8" title="">Kirjaudu ulos</a><?php } ?></li>
            </ul>
        </div>
    </div>
    <div id="welcome" class="wrapper-style1">
        <div id="enmuista">
            <h2>Luokan tekeminen</h2>
        </div>
    </div>        
    <div id="enmuista">
        <?php
        try{
            $sql = "SELECT COUNT(*) FROM KS_luokka where OpettajaID = " . "'".$_SESSION['sOpettajaID']."'";
            $kysely=$DBH->prepare($sql);
            $kysely->execute();				
            $tulos=$kysely->fetch();
            if($tulos[0] == 0){ //opettajalla ei ole vielä luokkaa
                include("forms/classcreate.php");
            }else{
                include("forms/studentadder.php");
                /*include("forms/studentadder.php");*/
            }

        }catch(PDOException $e) {
                file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
            $_SESSION['swarningInput'] = 'Database problem';
        }
        ?>
    </div>
    <div class="title"></div>
    <!--Luokan oppilaat -->
    <div id="enmuista">
        <?php
           $sql="SELECT * FROM	KS_oppilas WHERE LuokkaID = " . "'".$_SESSION['oLuokkaID']."'";
           $kysely=$DBH->prepare($sql);				
           $kysely->execute();
               echo("<h2>Luokan oppilaat</h2>");
                ?>
                <fieldset>
                <?php
               foreach($DBH->query("SELECT COUNT(*) FROM KS_oppilas WHERE LuokkaID = " . "'".$_SESSION['oLuokkaID']."'") as $row) {
                   echo "<p>Luokassa on  " . $row['COUNT(*)'] . " oppilasta</p>";
                   }
               
               echo("<table id='jalka'>
                   <tr>
                       <th id='poyta'>Nimi</th>
                       <th id='poyta'>Salasana</th>
                       <th id='poyta'>Pisteet</th>
                   </tr>");
               while	($row=$kysely->fetch()){	
                       echo("<tr><td id='poyta'>".$row["Oppilastunnus"]."</td>
                       <td id='poyta'>".$row["Oppilassalasana"]."</td>
                       <td id='poyta'>".$row["Pisteet"]."</td>");
                   }
               echo("</table>");
        ?>
                </fieldset>
    </div>

</body>
</html>