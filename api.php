<?php 
    $ipserver ="192.168.65.112";
    $nomBase = "doodle";
    $loginPrivilege ="root";
    $passPrivilege ="root"; 
    // On initialise l'objet PDO.
    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

   
    //créer un calendrier
    if(isset($_GET["donne"])){
        $retour[2] = $_GET["donne"];
        $req = "update test set nom='".$_GET["donne"]."' where id = 1";
        $GLOBALS["pdo"]->query($req);
        //enregistrer en bdd la donnée
    }

    if(isset($_POST["donne2"])){
        $retour[2] = $_POST["donne2"];
        $req = "update test set nom='".$_POST["donne2"]."' where id = 2";
        $GLOBALS["pdo"]->query($req);
        //enregistrer en bdd la donnée
    }


    //page de traitement de l'appel API depuis un code javascript
    //je vais juste retourner un chiffre aléatoire
    // mais je pourrais récupérer des données POST OU GET
    // je pourrais faire des actions metier ( exemple des calculs pour mon appli)
    //je pourrais faire des actions sur ma BDD
    $retour[0] = rand(0,1000);
    $retour[1] = "julien";

    //il est preferable de retourner un string compatible JSON qui sera encodé via la méthode json_encode.

    echo  json_encode($retour);
