<?php
interface filmSQL
{
    public const SELECT_ALL_FILM = "SELECT * FROM Film";
    public const SELECT_FILM_BY_ID = "SELECT * FROM Film WHERE id = :id";
    public const SELECT_FILM_BY_NOM = "SELECT * FROM Film WHERE nom = :nom";
    public const INSERT_FILM_BY_NOM_DATE_SYNOPSIS = "INSERT INTO film(nom, date_sortie, synopsis) VALUES (:nom, :date, :synopsis)";
    public const UPDATE_FILM_NOM_SYNOPSIS_BY_ID = "UPDATE film SET nom = :nom, synopsis= :synopsis WHERE id = :id";
    public const SELECT_FILM_RECENT = "SELECT * FROM Film ORDER BY date_sortie DESC LIMIT :limit";
}