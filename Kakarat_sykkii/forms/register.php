<?php
//Lomakkeen submit painettu?
if(isset($_POST['submitUser'])){
  //Tarkistetaan syötteet myös palvelimella
  if(strlen($_POST['gUsername'])<4){
   $_SESSION['swarningInput']="Illegal username (min 4 chars)";
  }else if(!filter_var($_POST['gLuokkaID'], FILTER_VALIDATE_INT)){
   $_SESSION['swarningInput']="Illegal LuokkaID";
  }else if(strlen($_POST['gPassword'])<8){
  $_SESSION['swarningInput']="Illegal password (min 8 chars)";
  }else if($_POST['gPassword']!= $_POST['gPasswordVerify']){
  $_SESSION['swarningInput']="Given password and verified not same";
  }else{
  unset($_SESSION['swarningInput']);

  //1. Tiedot sessioon
  $_SESSION['suserName']=$_POST['gUsername'];
  $_SESSION['sloggedIn']="yes";
  $_SESSION['sname']= $_POST['gName'];
  $_SESSION['sLuokkaID']=$_POST['gLuokkaID'];


  //2. Tiedot kantaan - kesken
  $data['fname'] = $_POST['gUsername'];
  $data['rname'] = $_POST['gName'];
  $data['rluokkaID'] = $_POST['gLuokkaID'];
  $added='#â‚¬%&&/'; //suolataan annettu salasana
  $data['pwd'] = password_hash($_POST['gPassword'].$added, PASSWORD_BCRYPT);
  try {
    //***Email ei saa olla käytetty aiemmin
    $sql = "SELECT COUNT(*) FROM KS_opettaja where Opettajatunnus  =  " . "'".$_POST['gUsername']."'"  ;
    $kysely=$DBH->prepare($sql);
    $kysely->execute();				
    $tulos=$kysely->fetch();
    if($tulos[0] == 0){ //email ei ole käytössä
     $STH = $DBH->prepare("INSERT INTO KS_opettaja (LuokkaID, Opettajatunnus, Opettajasalasana, Opettajanimi) VALUES (:rluokkaID, :fname, :pwd, :rname);");
     $STH->execute($data);
     header("Location: index.php"); //Palataan pääsivulle kirjautuneena
    }else{
      $_SESSION['swarningInput']="accountname is reserved";
    }
  } catch(PDOException $e) {
    file_put_contents('log/DBErrors.txt', 'signInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
    $_SESSION['swarningInput'] = 'Database problem';
  }
  //Testataan pääsivulle paluu

  //Palataan pääsivulle jos tallennus onnistui -kesken
 }
 if(isset($_SESSION['swarningInput'])){
    echo("<p class=\"warning\">ILLEGAL INPUT: ". $_SESSION['swarningInput']."</p>");
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