<?php

session_start();

include "../Donnee/UtilisateurDAO.php";


$filtresUtilisateur =
    array(
        'id' => FILTER_VALIDATE_INT,
        'pseudo' => FILTER_SANITIZE_STRING,
        'nom' => FILTER_SANITIZE_STRING,
        'prenom' => FILTER_SANITIZE_STRING,
        'mail' => FILTER_SANITIZE_STRING,
        'password' => FILTER_SANITIZE_STRING,

    );

$utilisateur = filter_input_array(INPUT_POST, $filtresUtilisateur);
$objetUtilisateur = new Utilisateur(1, $utilisateur['pseudo'],
    $utilisateur['nom'],
    $utilisateur['prenom'],
    $utilisateur['mail'],
    $utilisateur['password']);
UtilisateurDAO::insererUtilisateur($objetUtilisateur);

$parametres = [];

$parametres['inscription'] = true;

http_redirect('../inscription_connexion.php', $parametres);

?>


