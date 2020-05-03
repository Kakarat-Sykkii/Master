<fieldset><legend>Tallenna oppilas</legend>
<?php
    if(!isset($_POST['submitOppilas'])){
        include("forms/addstudent.php");
    }
    if(isset($_POST['submitOppilas'])){
        if(strlen($_POST['givenSname'])>=2 && strlen($_POST['givenSname'])<=30){
            $_SESSION['studentName'] = $_POST['givenSname'];
            $_SESSION['studentPassword'] = $_POST['givenSpassword'];
            include("forms/savestudent.php");
        }else{
            echo("Anna nimi: min 2 max 30 merkkiä.<br />Anna salasana: min 2 max 30 merkkiä.");
        }
    }
    
    $kysely1 = $DBH->prepare("SELECT Luokka_ID FROM `KS_luokka` WHERE OpettajaID = " . "'".$_SESSION['sOpettajaID']."'");
    $kysely1->execute();
    $tulos = $kysely1->fetch();
    /*echo("tulostus: " . $tulos["Luokka_ID"] . "tässä");*/
    $_SESSION['oLuokkaID'] = $tulos["Luokka_ID"];
    
/*
    if(isset($_POST['resetti'])){
	//Palataan takaisin tälle samalle sivulle jolloin sessio käynnistyy uudelleen
        
    }*/
    if(isset($_POST['saveOppilas'])){
        //Parametrit taulukkona array
        $data['oluokka'] = $_SESSION['oLuokkaID'];
        $data['onimi'] = $_SESSION['studentName'];
        /*$added='#â‚¬%&&/';
        $data['osalasana'] = password_hash($_SESSION['studentPassword'].$added, PASSWORD_BCRYPT);*/
        $data['osalasana'] = $_SESSION['studentPassword'];
        try{
            //kysely
            $STH = $DBH->prepare("INSERT INTO KS_oppilas (LuokkaID, Oppilastunnus, Oppilassalasana) VALUES (:oluokka, :onimi, :osalasana);");
            $STH->execute($data);
            //Palataan takaisin tälle sivulle
            header("Location: luokka.php");
        } catch(PDOException $e) {
            file_put_contents('log/DBErrors.txt', 'studentadder.php: '.$e->getMessage()."\n", FILE_APPEND);
            echo "Tallennusvirhe: " . $e->getMessage();
        }
    }
?>
</fieldset>