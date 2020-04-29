<fieldset>Lisää luokka</fieldset>
<?php
        if(!isset($_GET['submitLuokka'])){
            include("forms/nimiLomake.php");
        }else{
            if(strlen($_GET['givenLuokka'])>=2){
                $_SESSION['luokkaName'] = $_GET['givenLuokka'];
            }else{
                echo("Anna luokallesi nimi");
                include("forms/nimiLomake.php");
            }
        }
        if(isset($_SESSION['luokkaName']) && !isset($_POST['submitClass'])){
            echo("<p>Luokkasi nimi on " . $_SESSION['luokkaName']."<br />");
            /*echo("<p>Luokkasi ID on " . $_SESSION['sLuokkaID']."<br />");*/
            echo("<p>Opettaja ID:si on " . $_SESSION['sOpettajaID']."<br />");
            include("forms/luokantallennus.php");
        }
        if(isset($_POST['submitSave'])){
            $data['luokka'] = $_SESSION['luokkaName'];
            $data['OpettajaID'] = $_SESSION['sOpettajaID'];
            /*$data['luokkaID'] = $_SESSION['sLuokkaID'];*/

            try{
                //kysely
                $STH = $DBH->prepare("INSERT INTO KS_luokka (/*Luokka_ID, */OpettajaID, Luokkanimi) VALUES (/*:LuokkaID, */:OpettajaID, :luokka);");
                $STH->execute($data);
                //Palataan takaisin tälle sivulle
                header("Location: luokka.php");
            } catch(PDOException $e) {
                file_put_contents('log/DBErrors.txt', 'singInUser.php: '.$e->getMessage()."\n", FILE_APPEND);
                echo "Tallennusvirhe: " . $e->getMessage();
            }
        }
?>