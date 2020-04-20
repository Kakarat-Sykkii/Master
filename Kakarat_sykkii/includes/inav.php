<nav>
<?php
//Käyttäjän tila

if($_SESSION['sloggedIn']=="yes"){
    echo("<p>** User: " .$_SESSION['sname']);
    ?><a href="logOutUser.php">Log out</a><?php
}else{
    ?>
    <p>ei kirjautunut</p>
    <?php
}
?>
</nav>