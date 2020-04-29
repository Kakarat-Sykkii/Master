<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitStudent'])){
  //***Tarkistetaan email myös palvelimella 
     try {
      //Tiedot kannasta, hakuehto
      $data['oName'] = $_POST['goName'];
      $STH = $DBH->prepare("SELECT Oppilastunnus, Oppilassalasana, Pisteet, Käytetyt_pisteet FROM KS_oppilas WHERE Oppilastunnus = :oName;");
      $STH->execute($data);
      $STH->setFetchMode(PDO::FETCH_OBJ);
      $tulosOlio=$STH->fetch();
      $givenSalasana = $_POST['goPassword'];
      //lomakkeelle annettu salasana + suola
 
       //Löytyikö email kannasta?   
       if($tulosOlio!=NULL){
          //email löytyi
         // var_dump($tulosOlio);
          if(($tulosOlio->Oppilassalasana)){
              $_SESSION['ologgedIn']="yes";
              $_SESSION['oname']=$tulosOlio->Oppilastunnus;
              $_SESSION['opisteet']=$tulosOlio->Pisteet;
              $_SESSION['okpisteet']=$tulosOlio->Käytetyt_pisteet;
              header("Location: index.php"); //Palataan pääsivulle kirjautuneena
          }else{
            $_SESSION['swarningInput']="Wrong password";
          }
      }else{
        $_SESSION['swarningInput']="Väärä tunnus";
      }
     } catch(PDOException $e) {
        file_put_contents('log/DBErrors.txt'.$e->getMessage()."\n", FILE_APPEND);
        $_SESSION['swarningInput'] = 'Ongelma?';
    }
  }
?>

<?php
//***Luovutetaanko ja palataan takaisin pääsivulle alkutilanteeseen
//ilma  rekisteröintiä?
if(isset($_POST['submitBack'])){
  session_unset();
  session_destroy();
  header("Location: index.php");
}
?>

<?php
  //***Näytetäänkö lomakesyötteen aiheuttama varoitus?
if(isset($_SESSION['swarningInput'])){
  echo("<p class=\"warning\">ILLEGAL INPUT: ". $_SESSION['swarningInput']."</p>");
}
?>