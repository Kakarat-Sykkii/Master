<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitUser'])){
  //Tarkistetaan syötteet myös palvelimella
  if(strlen($_POST['gName'])<2){
   $_SESSION['swarningInput']="Illegal username (min 2 chars)";
  }else if(!filter_var($_POST['givenEmail'], FILTER_VALIDATE_EMAIL)){
   $_SESSION['swarningInput']="Illegal email";
  }else if(strlen($_POST['gPassword'])<8){
  $_SESSION['swarningInput']="Illegal password (min 8 chars)";
  }else if($_POST['gPassword']!= $_POST['gPasswordVerify']){
  $_SESSION['swarningInput']="Given password and verified not same";
  }else{
  unset($_SESSION['swarningInput']);

  //1. Tiedot sessioon
  $_SESSION['semail']=$_POST['givenEmail'];
  $_SESSION['sloggedIn']="yes";
  $_SESSION['sname']= $_POST['gName'];
  /*$_SESSION['sLuokkaID']=$_POST['gLuokkaID'];*/


  //2. Tiedot kantaan - kesken
  $data['email'] = $_POST['givenEmail'];
  $data['name'] = $_POST['gName'];
  /*$data['luokkaID'] = $_POST['gLuokkaID'];*/
  $added='#â‚¬%&&/'; //suolataan annettu salasana
  $data['pwd'] = password_hash($_POST['gPassword'].$added, PASSWORD_BCRYPT);
  try {
    //***Email ei saa olla käytetty aiemmin
    $sql = "SELECT COUNT(*) FROM KS_opettaja where userEmail  =  " . "'".$_POST['givenEmail']."'"  ;
    $kysely=$DBH->prepare($sql);
    $kysely->execute();				
    $tulos=$kysely->fetch();
    if($tulos[0] == 0){ //email ei ole käytössä
      $STH = $DBH->prepare("INSERT INTO KS_opettaja (/*LuokkaID, */userEmail, Opettajasalasana, Opettajanimi) VALUES (/*:luokkaID, */:email, :pwd, :name);");
      $STH->execute($data);
      session_unset();
      session_destroy();
      header("Location: index.php"); //Palataan pääsivulle kirjautuneena
    }else{
      $_SESSION['swarningInput']="email is reserved";
    }
  } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
    $_SESSION['swarningInput'] = 'Database problem';
  }
  //Testataan pääsivulle paluu

  //Palataan pääsivulle jos tallennus onnistui -kesken
 }
}
?>

<?php
//Luovutetaanko ja palataan takaisin pääsivulle alkutilanteeseen
if(isset($_POST['submitBack'])){
  session_unset();
  session_destroy();
  header("Location: index.php");
}
?>