<form method="post">
    <p>
        Luokka ID: <?php echo("" . $_SESSION['oLuokkaID'] . "")?>
    </p>
    <p>
        Oppilaan tunnus: <?php echo("" . $_SESSION['studentName'] . "")?>
    </p>
    <p>
        Oppilaan salasana: <?php echo("" . $_SESSION['studentPassword'] . "")?>
    </p>
    <p>
        <input type="submit" name="saveOppilas" value="Lisää"/>
        <input type="submit" name="resetti" value="Peruuta"/>
    </p>
</form>