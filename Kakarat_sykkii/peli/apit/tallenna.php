<?php
session_start();
include("../config/config.php");
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
  //tallennetaan peli tilanne kantaan
  $data['tiles'] = $_GET["data"];            
  $data ['oppilas'] = 11;
  //kysely
  $STH = $DBH->prepare("UPDATE KS_oppilas SET tilanne = :tiles WHERE OppilasID = :oppilas ");
    //" . "'".$oppilas."'");
    
    $STH->execute($data);
        //Palataan takaisin tälle sivulle
        //header("Location: pistelaskuri.php");
  //echo("hyvin meni");
  echo(json_encode($_GET["data"]));

?>
