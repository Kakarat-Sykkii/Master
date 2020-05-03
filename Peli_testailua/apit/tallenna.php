<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $tiles = $_GET["data"];
  echo(json_encode($tiles));
 
?>
