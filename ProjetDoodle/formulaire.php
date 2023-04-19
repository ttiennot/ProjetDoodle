<?php
function formDeco()
{
    if (isset($_POST["disconnect"])) {
        session_unset();
        session_destroy();
    } elseif (isset($_SESSION['nom_utilisateur'])) {
        echo 'bonjour ' . $_SESSION['nom_utilisateur'];
        //ecrire ici l'id etc
        $user = $_SESSION['nom_utilisateur'];
?>
        <form action="" method="post">
            <input type="submit" name="disconnect" value="déconnexion">
        </form>
    <?php
    }
}


function formConnect()
{
    if (isset($_POST['submit']) && !isset($_SESSION['nom_utilisateur'])) {
        $_SESSION['nom_utilisateur'] = $_POST['nom'];
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="disconnect" value="déconnexion">
        </form>
    <?php

    } elseif (isset($_SESSION['nom_utilisateur'])) {
        echo 'connecté en tant que : ' . $_SESSION['nom_utilisateur'];
        $user = $_SESSION['nom_utilisateur'];
    ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="disconnect" value="déconnexion">
        </form>
    <?php

    } else {
    ?>
        <form id="connect" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>saisir votre nom :</label>
            <input type="text" name="nom" required>
            <br><br>
            <input type="submit" name="submit" value="Envoyer">
        </form>
<?php
    }
}
?>

<?php
function formcreateDelete()
{
?>
    <form id="creerCal" action="" method="post">
        <input type="submit" name="creerCal" value="creer calendrier">
        <input type="submit" name="rejCal" value="rejoindre calendrier">
    </form>

<?php

}

function numSemaine()
{
?>
    <form id="numSemaine" method="post">
        <label>Numéro de semaine : (de 1 à 52)
            <input  id="txtNumSemaine" name="numSemaine" autocomplete="...">
        </label>
        <input type="submit" name="submit" value="Envoyer :)">
        
    </form>

<?php
}
?>