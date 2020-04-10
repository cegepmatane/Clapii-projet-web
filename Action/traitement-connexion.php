<?php

session_start();

include "../Donnee/UtilisateurDAO.php";
if (isset($_POST['pseudo'], $_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password = hash('sha512',$_POST["password"]) ;

    $utilisateur = UtilisateurDAO::recupererUtilisateur($pseudo, $password);
    $parametres = '';
    if ($utilisateur!=false){
        $_SESSION['id'] = $utilisateur->getId();
        $_SESSION['pseudo'] = $utilisateur->getPseudo();
    }else{
        $parametres.='mauvaisCredentials=true';
    }

}

header('Location: ../inscription_connexion.php?'.$parametres);
exit;
?>