<?php
/*
function fctUrl()
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

    $url .= "?val=";

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
    $newUrl = $url . $hash;
    return $newUrl;
}


function creerHash() {
    $timestamp = time();
    $random_chars = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3);
    $string_to_hash = $timestamp . $random_chars;
    $hash = hash('sha256', $string_to_hash);
    return $hash;
  }
  
function coucou() {
//$url = 'http://192.168.65.112/ProjetDoodle/index.php';
$hash = creerHash();
$new_url = '?' . http_build_query(array('cal' => $hash));
return $new_url;
}
*/
?>
