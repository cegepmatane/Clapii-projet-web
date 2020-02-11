<?php

//require('./SQL/filmSQL.php');
include "./Ressources/header.php";
include "./Ressources/FilmDAO.php";

$idFilm = $_GET['id'];
$film = FilmDAO::detaillerFilm($idFilm);

?>

<h1> <?=$film->getTitre();?> </h1>
<h2> <?=$film->getSynopsis();?></h2>
<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
include "./Ressources/footer.php";
?>