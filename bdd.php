<?php
$ipserver = "192.168.65.112";
$nomBase = "doodle";
$loginPrivilege = "root";
$passPrivilege = "root";
// On initialise l'objet PDO.
$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);


/*
if (isset($_SESSION["nom_utilisateur"])) {
    $req1 = "INSERT INTO `user`(`nom`, `idCalendrier`, `plage`, `color`) VALUES ('" . $_SESSION["nom_utilisateur"] . "', 'HEX807', 'matin', 'FF00FF')";
    $GLOBALS["pdo"]->query($req1);
}

if (isset($_POST['soumettre'])) {
    $req2 ="SELECT * FROM `user` WHERE 1";
    //$req3 = "INSERT INTO `calendrier`(`idUser`, `hash`) VALUES ('[value-1]','HEX405')";
    $tabInfosUser = $GLOBALS["pdo"]->query($req2);
    //$GLOBALS["pdo"]->query($req3);
}

foreach($tabInfosUser as $InfosUser) {
    echo $InfosUser["InfosUser"];
}
*/
?>
