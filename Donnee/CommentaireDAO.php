<?php
include_once __DIR__."/../PhpSQL/CommentaireSQL.php";
include_once __DIR__."/../Modele/Commentaire.php";
include_once __DIR__."/../Donnee/BaseDeDonnees.php";

class CommentaireDAO implements CommentaireSQL
{

    public static function insererCommentaire($commentaire, $idFilm, $idUtilisateur)
    {
        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeCommentaire = $connexion->prepare(self::INSERT_COMMENTAIRE_BY_ID_UTILISATEUR_ID_FILM_TEXT);
        $demandeCommentaire->bindParam(':id_utilisateur', $idUtilisateur, PDO::PARAM_INT);
        $demandeCommentaire->bindParam(':id_film', $idFilm, PDO::PARAM_INT);
        $demandeCommentaire->bindParam(':text', $commentaire, PDO::PARAM_STR);
        $demandeCommentaire->execute();
    }

    public static function recupererCommentaireParIdUtilisateur($idUtilisateur)
    {

        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeCommentaire = $connexion->prepare(self::SELECT_COMMENTAIRE_BY_ID_UTILISATEUR);
        $demandeCommentaire->bindParam(':id_utilisateur', $idUtilisateur, PDO::PARAM_INT);
        $demandeCommentaire->execute();

        $commentaires = $demandeCommentaire->fetchALL(PDO::FETCH_ASSOC);

        for ($i = o; $i < count($commentaires); $i++) {
            $listeCommentaire[$i] = new commentaire($commentaires[$i]['id'],
                $commentaires['idUtilisateur'],
                $commentaires['idFilm'],
                $commentaires['text']);
        }
        return $listeCommentaire;

    }

    public static function recupererCommentaireParIdFilm($idFilm)
    {

        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeCommentaire = $connexion->prepare(self::SELECT_COMMENTAIRE_BY_ID_FILM);
        $demandeCommentaire->bindParam(':id_film', $idFilm, PDO::PARAM_INT);
        $demandeCommentaire->execute();

        $commentaires = $demandeCommentaire->fetchALL(PDO::FETCH_ASSOC);


        for ($i = o; $i < count($commentaires); $i++) {
            $listeCommentaire[$i] = new commentaire($commentaires[$i]['id'],
                $commentaires['idUtilisateur'],
                $commentaires['idFilm'],
                $commentaires['text']);
        }
        return new $listeCommentaire;
    }

    public static function recupererCommentaireParIdUtilisateurEtIdFilm($idUtilisateur, $idFilm)
    {

        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeCommentaire = $connexion->prepare(self::SELECT_COMMENTAIRE_BY_ID_UTILISATEUR_ID_FILM);
        $demandeCommentaire->bindParam(':id_utilisateur', $idUtilisateur, PDO::PARAM_INT);
        $demandeCommentaire->bindParam(':id_film', $idFilm, PDO::PARAM_INT);
        $demandeCommentaire->execute();

        $commentaires = $demandeCommentaire->fetchALL(PDO::FETCH_ASSOC);


        for ($i = o; $i < count($commentaires); $i++) {
            $listeCommentaire[$i] = new commentaire($commentaires[$i]['id'],
                $commentaires['idUtilisateur'],
                $commentaires['idFilm'],
                $commentaires['text']);
        }
        return new $listeCommentaire;
    }

    public static function modifierCommentaireParId($idCommentaire, $commentaire)
    {

        $connexion = BaseDeDonnees::getInstance()->getConnexion();
        $demandeCommentaire = $connexion->prepare(self::UPDATE_COMMENTAIRE_BY_ID);
        $demandeCommentaire->bindParam(':id', $idCommentaire, PDO::PARAM_INT);
        $demandeCommentaire->bindParam(':text', $commentaire, PDO::PARAM_STR);
        $demandeCommentaire->execute();


    }
}

