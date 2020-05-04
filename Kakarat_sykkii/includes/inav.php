<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>Käyttäjä: " .$_SESSION['sname']. "</p>");
}else if($_SESSION['ologgedIn']=="yes"){
    echo("<p>Käyttäjä: " .$_SESSION['oname']. "</p>");
}else{
    ?>
    <p><strong>ei kirjautunut</strong></p>
    <?php
}
?>