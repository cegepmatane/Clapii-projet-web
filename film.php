<?php
    include "./Ressources/header.php";

    include "./Ressources/Connexion.php";
    $nomFilm = $_GET['film'];
    $nomFilm = "'".$nomFilm."'";
    //print_r($nomFilm);
    $REQUETE_SQL_FILM_NOM = "SELECT * FROM Film WHERE nom = " .$nomFilm;
    //print_r($REQUETE_SQL_FILM_NOM);
    $requeteFilm = $basededonnees->prepare($REQUETE_SQL_FILM_NOM);
    $requeteFilm->execute();
    $film = $requeteFilm->fetch();
    print_r($film);
    
?>