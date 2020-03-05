<?php
include "../Donnee/FilmDAO.php";
$films = FilmDAO::retourFilmRecent();
echo ("{\"id\": ".$films[0]->getId().",\"titre\": \"".$films[0]->getTitre()."\", \"date\":\"". $films[0]->getDate()."\"}");