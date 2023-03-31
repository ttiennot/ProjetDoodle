<?php
function formConnect()
{
    if (isset($_POST["disconnect"])) {
        session_unset();
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
    }

    if (isset($_POST['submit']) && !isset($_SESSION['nom_utilisateur'])) {
        $_SESSION['nom_utilisateur'] = $_POST['nom'];
?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="disconnect" value="déconnexion">
        </form>
    <?php

    } elseif (isset($_SESSION['nom_utilisateur'])) {
        echo 'bonjour ' . $_SESSION['nom_utilisateur'];
        $user = $_SESSION['nom_utilisateur'];
    ?>

        <?php
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="disconnect" value="déconnexion">
        </form>
    <?php

    } else {
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>saisir votre nom :</label>
            <input type="text" name="nom" required>
            <br><br>
            <input type="submit" name="submit" value="Envoyer">
        </form>
<?php
    }
}
?>