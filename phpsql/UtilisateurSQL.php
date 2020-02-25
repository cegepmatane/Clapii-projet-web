<?php


class UtilisateurSQL
{
    public const SELECT_ALL_UTILISATEUR = "SELECT * FROM utilisateur";
    public const SELECT_UTILISATEUR_BY_PSEUDO_AND_PASSWORD = "SELECT * FROM utilisateur WHERE pseudo = :pseudo AND password = :password";
    public const INSERT_UTILISATEUR_BY_PSEUDO_NOM_PRENOM_MAIL_PASSWORD = "INSERT INTO utilisateur(pseudo, nom, prenom, mail, password) VALUES (:pseudo, :nom, :prenom, :mail, :password)";
}