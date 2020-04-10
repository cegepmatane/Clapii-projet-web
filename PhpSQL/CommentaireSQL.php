<?php
interface CommentaireSQL
{
    public const SELECT_ALL_COMMENTAIRE = "SELECT * FROM commentaire";
    public const SELECT_COMMENTAIRE_BY_ID = "SELECT * FROM commentaire WHERE id = :id";
    public const SELECT_COMMENTAIRE_BY_ID_UTILISATEUR = "SELECT * FROM commentaire WHERE id_utilisateur = :id_utilisateur";
    public const SELECT_COMMENTAIRE_BY_ID_FILM = "SELECT * FROM commentaire WHERE id_film = :id_film";
    public const INSERT_COMMENTAIRE_BY_ID_UTILISATEUR_ID_FILM_TEXT = "INSERT INTO commentaire( id_utilisateur, id_film, text) VALUES ( :id_utilisateur, :id_film, :text)";
    public const SELECT_COMMENTAIRE_BY_ID_UTILISATEUR_ID_FILM = "SELECT * FROM commentaire WHERE id_film = :id_film AND id_utilisateur = :id_utilisateur";
}
