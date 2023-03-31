<?php
session_start();
include 'formulaire.php';
include 'classe/user.php';
include 'bdd.php';

function createUserIfNeeded()
{
    global $pdo;
    if (isset($_SESSION['nom_utilisateur'])) {
        $connectPseudo = $_SESSION['nom_utilisateur'];
        $requete = "SELECT `id` FROM user WHERE `nom` = '$connectPseudo'";
        $result = $GLOBALS["pdo"]->query($requete);

        if ($result != false) {
            echo 'la requete fonctionne';
        }

        if ($result) {
            echo 'enregistré en bdd';
            $UserId = $result;
            $_SESSION['id'] = $UserId;
        } else {
            echo 'pas enregistré en bdd';
            $u1 = new User(NULL, NULL, NULL, NULL);
            $user = $_SESSION['nom_utilisateur'];
            $plage = 'matin';
            $color = 'HH12FF';
            $u1->CreateUser($user, $plage, $color);
            $requete = "SELECT `id` FROM user WHERE `nom` = '$user'";
            $resultId = $GLOBALS["pdo"]->query($requete);
            if ($resultId) {
                $UserId = $resultId[0];
                $_SESSION['id'] = $UserId;
                echo implode(", ", $_SESSION['id']);
            }
        }
    }
}

function getUserIfNeeded()
{
    if (isset($_SESSION['nom_utilisateur']) && isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $u1 = new User(NULL, NULL, NULL, NULL);
        $u1->getUserById($id);
        echo 'bonjour ' . $_SESSION['nom_utilisateur'] . 'voici votre id :' . $_SESSION['id'];
    }
}

createUserIfNeeded();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calendrier hebdomadaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="form">
        <?php
        formConnect();
        ?>
    </div>

    <div id="welcome">
        <?php
        getUserIfNeeded();
        ?>
    </div>

    <h1>Calendrier hebdomadaire</h1>
    <h2>Semaine n°</h2>
    <table>
        <tr>
            <th>DOODLE</th>
            <th>lun</th>
            <th>mar</th>
            <th>mer</th>
            <th>jeu</th>
            <th>ven</th>
            <th>sam</th>
            <th>dim</th>
        </tr>
        <tr>
            <td>matin</td>
            <td class="calendrier_case" id="1">cliquez</td>
            <td class="calendrier_case" id="2">cliquez</td>
            <td class="calendrier_case" id="3">cliquez</td>
            <td class="calendrier_case" id="4">cliquez</td>
            <td class="calendrier_case" id="5">cliquez</td>
            <td class="calendrier_case" id="6">cliquez</td>
            <td class="calendrier_case" id="7">cliquez</td>
        </tr>
        <tr>
            <td>midi</td>
            <td class="calendrier_case" id="8">cliquez</td>
            <td class="calendrier_case" id="9">cliquez</td>
            <td class="calendrier_case" id="10">cliquez</td>
            <td class="calendrier_case" id="11">cliquez</td>
            <td class="calendrier_case" id="12">cliquez</td>
            <td class="calendrier_case" id="13">cliquez</td>
            <td class="calendrier_case" id="14">cliquez</td>
        </tr>
        <tr>
            <td>après-midi</td>
            <td class="calendrier_case" id="15">cliquez</td>
            <td class="calendrier_case" id="16">cliquez</td>
            <td class="calendrier_case" id="17">cliquez</td>
            <td class="calendrier_case" id="18">cliquez</td>
            <td class="calendrier_case" id="19">cliquez</td>
            <td class="calendrier_case" id="20">cliquez</td>
            <td class="calendrier_case" id="21">cliquez</td>
        </tr>
        <tr>
            <td>soir</td>
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

    <input type="submit" name="soumettre" value="soumettre" onclick="RecupCases()">


</body>
<script>
    var pseudo = <?php echo json_encode($_SESSION['nom_utilisateur']); ?>;
</script>
<script src="main.js"></script>

</html>