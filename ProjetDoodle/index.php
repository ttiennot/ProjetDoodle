<?php
session_start();
include 'formulaire.php';
include 'classe/user.php';
include 'bdd.php';
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepper'Mint Planning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST["disconnect"])) {
        session_unset();
        session_destroy();
    }

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
    }


    if (!isset($_SESSION["nom_utilisateur"])) {
        formConnect();
    }
    if (isset($_SESSION['nom_utilisateur']) && !isset($_POST["creerCal"])) {
        formcreateDelete();
    }
    if (isset($_SESSION['nom_utilisateur']) && isset($_POST["creerCal"])) {
        formDeco();
        //$url = coucou();
        //echo $url;

    ?>
        <script>
            const timestamp = new Date().getTime();
            const randomChars = Math.random().toString(36).substring(2, 5);
            const hash = `${timestamp}${randomChars}`;
            modifHidden = hash;
            //var modifHidden = document.getElementById("hidden").value;
            let url = window.location.origin + window.location.pathname + "?cal=" + encodeURIComponent(hash);

            window.history.pushState({
                path: url
            }, '', url);


            var pseudo = <?php echo json_encode($_SESSION['nom_utilisateur']); ?>;
        </script>
        <h1>Calendrier hebdomadaire</h1>
        <h2>Semaine n°</h2>
        <table>
            <tr>
                <th>Pepper'Mint Planning</th>
                <th>lun</th>
                <th>mar</th>
                <th>mer</th>
                <th>jeu</th>
                <th>ven</th>
                <th>sam</th>
                <th>dim</th>
            </tr>
            <tr>
                <td id="creneau">matin</td>
                <td class="calendrier_case" id="1">cliquez</td>
                <td class="calendrier_case" id="2">cliquez</td>
                <td class="calendrier_case" id="3">cliquez</td>
                <td class="calendrier_case" id="4">cliquez</td>
                <td class="calendrier_case" id="5">cliquez</td>
                <td class="calendrier_case" id="6">cliquez</td>
                <td class="calendrier_case" id="7">cliquez</td>
            </tr>
            <tr>
                <td id="creneau">midi</td>
                <td class="calendrier_case" id="8">cliquez</td>
                <td class="calendrier_case" id="9">cliquez</td>
                <td class="calendrier_case" id="10">cliquez</td>
                <td class="calendrier_case" id="11">cliquez</td>
                <td class="calendrier_case" id="12">cliquez</td>
                <td class="calendrier_case" id="13">cliquez</td>
                <td class="calendrier_case" id="14">cliquez</td>
            </tr>
            <tr>
                <td id="creneau">après-midi</td>
                <td class="calendrier_case" id="15">cliquez</td>
                <td class="calendrier_case" id="16">cliquez</td>
                <td class="calendrier_case" id="17">cliquez</td>
                <td class="calendrier_case" id="18">cliquez</td>
                <td class="calendrier_case" id="19">cliquez</td>
                <td class="calendrier_case" id="20">cliquez</td>
                <td class="calendrier_case" id="21">cliquez</td>
            </tr>
            <tr>
                <td id="creneau">soir</td>
                <td class="calendrier_case" id="22">cliquez</td>
                <td class="calendrier_case" id="23">cliquez</td>
                <td class="calendrier_case" id="24">cliquez</td>
                <td class="calendrier_case" id="25">cliquez</td>
                <td class="calendrier_case" id="26">cliquez</td>
                <td class="calendrier_case" id="27">cliquez</td>
                <td class="calendrier_case" id="28">cliquez</td>
            </tr>
        </table>
        <br>

        <input type="submit" name="soumettre" value="soumettre" onclick="recupCreneau();">

    <?php
    }
    ?>
</body>

<script src="main.js"></script>

</html>