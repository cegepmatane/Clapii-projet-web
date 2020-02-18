<?php

//require('./phpsql/filmSQL.php');
include "../Ressources/header.php";
include "./donnee/FilmDAO.php";

$idFilm = $_GET['id'];
$film = FilmDAO::detaillerFilm($idFilm);

?>

    <form action="traitement-modifier-film.php" method="post">

        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?=$film->getTitre() ?>"/>
        </div>

        <div>
            <label for="date">Date</label>
            <input type="text" name="date" id="date" value="<?=$film->getDate() ?>"/>
        </div>

        <div>
            <label for="synopsis">Synopsis</label>
            <input type="text" name="synopsis" id="synopsis" value="<?= $film->getSynopsis() ?>"/>
        </div>


        <input type="submit" value="Enregistrer">
        <input type="hidden" name="id" value="<?= $film->getId() ?>"/>
    </form>

<?php
include "../Ressources/footer.php";
?>