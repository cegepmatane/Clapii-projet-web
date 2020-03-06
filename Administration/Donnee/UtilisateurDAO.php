<?php

include_once "./PhpSQL/UtilisateurSQL.php";
include_once "./Modele/Utilisateur.php";
include_once "./Donnee/BaseDeDonnees.php";

class UtilisateurDAO implements UtilisateurSQL
{

    public static function recupererUtilisateur($pseudo, $password){
        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeUtilisateur = $connexion->prepare(self::SELECT_UTILISATEUR_BY_PSEUDO_AND_PASSWORD);
        $demandeUtilisateur->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $demandeUtilisateur->bindParam(':password', $password, PDO::PARAM_STR);
        $demandeUtilisateur->execute();

        $utilisateur = $demandeUtilisateur->fetch(PDO::FETCH_ASSOC);

        return new Utilisateur(
            $utilisateur['id'],
            $utilisateur['pseudo'],
            $utilisateur['nom'],
            $utilisateur['prenom'],
            $utilisateur['mail'],
            $utilisateur['password']);
    }

    public static function identifierUtilisateur($id){
        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeUtilisateur = $connexion->prepare(self::SELECT_UTILISATEUR_BY_ID);
        $demandeUtilisateur->bindParam(':id', $id, PDO::PARAM_INT);
        $demandeUtilisateur->execute();

        $utilisateur = $demandeUtilisateur->fetch(PDO::FETCH_ASSOC);

        return new Utilisateur(
            $utilisateur['id'],
            $utilisateur['pseudo'],
            $utilisateur['nom'],
            $utilisateur['prenom'],
            $utilisateur['mail'],
            $utilisateur['password']);
    }

    public static function insererUtilisateur($utilisateur){

        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeUtilisateur = $connexion->prepare(self::INSERT_UTILISATEUR_BY_PSEUDO_NOM_PRENOM_MAIL_PASSWORD);

        $pseudo = $utilisateur->getPseudo();
        $nom = $utilisateur->getNom();
        $prenom = $utilisateur->getPrenom();
        $mail = $utilisateur->getMail();
        $password = $utilisateur->getPassword();

        $demandeUtilisateur->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $demandeUtilisateur->bindParam(':nom', $nom, PDO::PARAM_STR);
        $demandeUtilisateur->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $demandeUtilisateur->bindParam(':mail', $mail, PDO::PARAM_STR);
        $demandeUtilisateur->bindParam(':password', $password, PDO::PARAM_STR);

        $demandeUtilisateur->execute();
    }

}
