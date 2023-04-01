<?php
$ipserver = "192.168.65.112";
$nomBase = "doodle";
$loginPrivilege = "root";
$passPrivilege = "root";
// On initialise l'objet PDO.
$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
?>
