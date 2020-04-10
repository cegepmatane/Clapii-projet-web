<?php

include "../Donnee/FilmDAO.php";

if (isset($_GET['idFilm'])) {
    
    $idFilm = $_GET['idFilm'];

    $film = FilmDAO::detaillerFilm($idFilm);

    echo "<film id='" . $film->getId() . "'>" .
        "<titre>" . $film->getTitre() . "</titre>" .
        "<date>" . $film->getDate() . "</date>" .
        "<synopsis>" . $film->getSynopsis() . "</synopsis>" .
        "</film>";

} else {
    echo "id invalide";
}


