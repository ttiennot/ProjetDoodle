<?php
session_start();
include 'formulaire.php';
include 'classe/user.php';
include 'bdd.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer calendrier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="form">
        <?php
        formConnect();
        formcreateDelete();
        ?>
    </div>

    <div id="welcome">
        <?php
        //si mec connecté alors on recup toutes ses infos en bdd
        if (isset($_SESSION['nom_utilisateur'])) {
            $connectPseudo = $_SESSION['nom_utilisateur'];
            $requete = "SELECT `id` FROM user WHERE `nom` = '" . $connectPseudo . "';";
            $result = $GLOBALS["pdo"]->query($requete);
            if ($result != false) {
                echo 'la requete fonctionne ';
            }
            if ($result->rowCount() > 0) {
                echo 'enregistré en bdd ';
                $UserId = $result->fetch();
                $_SESSION['id'] = $UserId[0];
            }
            //si mec pas connecté on crée un user en bdd
            else {
                echo 'pas enregistré en bdd';
                $user = $_SESSION['nom_utilisateur'];
                $plage = 'matin';
                $color = 'HH12FF';
                $u1 = new User(NULL, $user, $plage, $color);

                $u1->CreateUser($user, $plage, $color);
                $requete = "SELECT `id` FROM user WHERE `nom` = '" . $user . "';";
                $resultId = $GLOBALS["pdo"]->query($requete);
                if ($resultId->rowCount() > 0) {
                    $UserId = $resultId->fetch();
                    $_SESSION['id'] = $UserId[0];
                }
            }
        }
        //si mec connecté et qu'il a son id dans la session on recup son id pour recup ses infos
        if (isset($_SESSION['nom_utilisateur']) && isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            //$u1->getUserById($id);
            echo "bonjour "  . $_SESSION["nom_utilisateur"] . " voici votre id :" . $_SESSION['id'];
            if (isset($_POST['creerCal'])) {

                header('Location: http://192.168.65.112/ProjetDoodle/index.php');
            }
        }
        ?>
    </div>
    <img class="cartman" src="assets/Cartman.png">
    <img class="cr7" src="assets/cr7.png">


</body>
<script src="main.js"></script>

</html>