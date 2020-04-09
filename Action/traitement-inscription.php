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

$utilisateur =filter_input_array(INPUT_POST, $filtresUtilisateur);

$parametres = '';

$poursuivreInscription  = true;

if(!UtilisateurDAO::pseudoEstDisponible($utilisateur['pseudo'])){
    $poursuivreInscription = false;
    $parametres .= 'pseudoEstDisponible=false&';
}
if(!UtilisateurDAO::mailEstDisponible($utilisateur['mail'])){
    $poursuivreInscription = false;
    $parametres .= 'mailEstDisponible=false';
}

if($poursuivreInscription){
    $objetUtilisateur = new Utilisateur(1, $utilisateur['pseudo'],
        $utilisateur['nom'],
        $utilisateur['prenom'],
        $utilisateur['mail'],
        $utilisateur['password']);
    UtilisateurDAO::insererUtilisateur($objetUtilisateur);

    $parametres .= 'inscription=true';
}



header('Location: ../inscription_connexion.php?'.$parametres);
exit;

?>


