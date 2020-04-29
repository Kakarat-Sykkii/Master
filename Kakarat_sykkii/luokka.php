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
                <li><a href="#" accesskey="2" title="">Pelilauta</a></li>
                <li><a href="aboutus.php" accesskey="3" title="">Tietoa meistä</a></li>
                <li><a href="vinkkeja.php" accesskey="4" title="">Vinkkejä liikuntaan</a></li><br/>
                <li class="current_page_item"><a href="luokka.php" accesskey="5" title="">Luokka</a></li>
                <li><?php if($_SESSION['sloggedIn']=="yes"){ ?><a href="logOutUser" accesskey="8" title="">Kirjaudu ulos</a><?php } ?></li>
            </ul>
        </div>
    </div>
    <div id="welcome" class="wrapper-style1">
        <div class="title">
            <h2>Luokan tekeminen</h2>
        </div>
    </div>        
    
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

    <!--Luokan oppilaat -->
    <?php
       $sql="SELECT * FROM	KS_oppilas WHERE LuokkaID = " . "'".$_SESSION['oLuokkaID']."'";
       $kysely=$DBH->prepare($sql);				
       $kysely->execute();
           echo("<h2>Luokan oppilaat</h2>");
       
           foreach($DBH->query('SELECT COUNT(*) FROM KS_oppilas') as $row) {
               echo "<p>Luokassa on  " . $row['COUNT(*)'] . " oppilasta</p>";
               }
       
           echo("<table>
               <tr>
                   <th>Nimi</th>
                   <th>Salasana</th>
                   <th>Pisteet</th>
               </tr>");
           while	($row=$kysely->fetch()){	
                   echo("<tr><td>".$row["Oppilastunnus"]."</td>
                   <td>".$row["Oppilassalasana"]."</td>
                   <td>".$row["Pisteet"]."</td>");
               }
           echo("</table>");
    ?>


</body>
</html>