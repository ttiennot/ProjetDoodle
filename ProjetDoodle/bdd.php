<?php
//connexion BDD chez moi
$ipserver = "localhost";
$nomBase = "doodle";
$loginPrivilege = "root";
$passPrivilege = "";

$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
/* 
//connexion BDD LaPro
$ipserver = "192.168.65.112";
$nomBase = "doodle";
$loginPrivilege = "root";
$passPrivilege = "root";

$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
*/
?>
