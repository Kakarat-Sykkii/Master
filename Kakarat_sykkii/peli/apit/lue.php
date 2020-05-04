<?php
include("../../config/start.php");
include("../../config/config.php");
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
  //haetaan tallennus
  //$data['tiles'] = $_GET["data"];            
  $data ['oppilas'] = 11;
  //kysely
  $STH = $DBH->prepare("SELECT tilanne FROM KS_oppilas WHERE OppilasID = :oppilas ");
    //" . "'".$oppilas."'");
    
    $STH->execute($data);
    //$STH->setFetchMode(PDO::FETCH_OBJ);
    $getsave = $STH->fetch();
    //Palataan takaisin tälle sivulle
        //header("Location: pistelaskuri.php");
  //echo("hyvin meni");
  $tulos = stripslashes($getsave[0]);
  echo($getsave[0]);
  //echo(json_encode($tulos));

?>
