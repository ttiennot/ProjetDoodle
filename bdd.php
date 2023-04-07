<?php
$ipserver = "localhost";
$nomBase = "doodle";
$loginPrivilege = "root";
$passPrivilege = "";
// On initialise l'objet PDO.
$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
?>
