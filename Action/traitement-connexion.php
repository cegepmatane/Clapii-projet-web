<?php

session_start();

include "../Donnee/UtilisateurDAO.php";
if (isset($_POST['pseudo'], $_POST['password']))
{
    $pseudo = $_POST['pseudo'];
    $password = hash('sha512',$_POST["password"]) ;

    $utilisateur = UtilisateurDAO::recupererUtilisateur($pseudo, $password);
    if ($utilisateur!=false){
        $_SESSION['id'] = $utilisateur->getId();
        $_SESSION['pseudo'] = $utilisateur->getPseudo();
        $_SESSION['mail'] = $utilisateur->getMail();

        echo "<requete>".
                "<etat>1</etat>".
             "</requete>";

    }else{

        echo "<requete>".
                "<etat>0</etat>".
             "</requete>";
    }

}

//header('Location: ../inscription_connexion.php?'.$parametres);
//exit;
?>