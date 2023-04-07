<?php
/*
function hash256()
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https";
    else
        $url = "http";

    // Ajoutez // à l'URL.
    $url .= "://";

    // Ajoutez l'hôte (nom de domaine, ip) à l'URL.
    $url .= $_SERVER['HTTP_HOST'];

    // Ajouter l'emplacement de la ressource demandée à l'URL
    $url .= $_SERVER['REQUEST_URI'];

    // Afficher l'URL
    //echo $url;
    // Crée un timestamp en secondes
    $timestamp = time();

    // Génère trois caractères aléatoires
    $randomChars = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 3);

    // Combine le timestamp et les caractères aléatoires
    $hashString = $timestamp . $randomChars;

    // Crée un hash en utilisant la fonction de hachage SHA256
    $hash = hash('sha256', $hashString);

    // Affiche l'URL'
    $url .= "/";
    $newUrl = $url . $hash;
    return $newUrl;
    
}
*/
?>
