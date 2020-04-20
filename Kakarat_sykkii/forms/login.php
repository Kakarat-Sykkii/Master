<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitOpe'])){
  //***Tarkistetaan email myös palvelimella
  if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['swarningInput']="Illegal email";
  }else{
    unset($_SESSION['swarningInput']);  
     try {
      //Tiedot kannasta, hakuehto
      $data['email'] = $_POST['givenEmail'];
      $STH = $DBH->prepare("SELECT OpettajaID, LuokkaID, userEmail, Opettajasalasana, Opettajanimi FROM KS_opettaja WHERE userEmail = :email;");
      $STH->execute($data);
      $STH->setFetchMode(PDO::FETCH_OBJ);
      $tulosOlio=$STH->fetch();
      //lomakkeelle annettu salasana + suola
      $givenPasswordAdded = $_POST['gPassword'].$added; //$added löytyy cconfig.php
 
       //Löytyikö email kannasta?   
       if($tulosOlio!=NULL){
          //email löytyi
         // var_dump($tulosOlio);
          if(password_verify($givenPasswordAdded,$tulosOlio->Opettajasalasana)){
              $_SESSION['sloggedIn']="yes";
              $_SESSION['sname']=$tulosOlio->Opettajanimi;
              $_SESSION['suserEmail']=$tulosOlio->userEmail;
              /*$_SESSION['sLuokkaID']=$tulosOlio->LuokkaID;*/
              $_SESSION['sOpettajaID']=$tulosOlio->OpettajaID;
              header("Location: index.php"); //Palataan pääsivulle kirjautuneena
          }else{
            $_SESSION['swarningInput']="Wrong password";
          }
      }else{
        $_SESSION['swarningInput']="Väärä sähköposti";
      }
     } catch(PDOException $e) {
        file_put_contents('log/DBErrors.txt'.$e->getMessage()."\n", FILE_APPEND);
        $_SESSION['swarningInput'] = 'Ongelma?';
    }
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