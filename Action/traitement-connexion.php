<?php

session_start();

include "../Donnee/UtilisateurDAO.php";
if (isset($_POST['pseudo'], $_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $utilisateur = UtilisateurDAO::recupererUtilisateur($pseudo, $password);
    if (isset($utilisateur)){
        $_SESSION['utilisateur'] = $utilisateur;
    }

}