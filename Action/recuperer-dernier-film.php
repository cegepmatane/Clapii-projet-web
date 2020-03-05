<?php
include "../Donnee/FilmDAO.php";
$films = FilmDAO::listerFilms();
echo ("{\"titre\": \"".$films[0]->getTitre()."\", \"date\":\"". $films[0]->getDate()."\"}");