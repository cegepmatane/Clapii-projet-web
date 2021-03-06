<?php
interface FilmSQL
{
    public const SELECT_ALL_FILM = "SELECT * FROM film";
    public const SELECT_FILM_BY_ID = "SELECT * FROM film WHERE id = :id";
    public const SELECT_FILM_BY_NOM = "SELECT * FROM film WHERE titre = :titre";
    public const INSERT_FILM_BY_NOM_DATE_SYNOPSIS = "INSERT INTO film(titre, date_sortie, synopsis) VALUES (:titre, :date, :synopsis)";
    public const UPDATE_FILM_BY_ID = "UPDATE film SET titre = :titre, date_sortie = :date_sortie ,synopsis= :synopsis WHERE id = :id";
    public const SELECT_FILM_RECENT = "SELECT * FROM film ORDER BY date_sortie DESC";
}