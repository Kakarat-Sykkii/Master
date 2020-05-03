<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>Käyttäjä: " .$_SESSION['sname']);
}else if($_SESSION['ologgedIn']=="yes"){
    echo("<p>Käyttäjä: " .$_SESSION['oname']);
}else{
    ?>
    <p><strong>ei kirjautunut<strong></p>
    <?php
}
?>
</nav>