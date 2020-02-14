<?php

//require('./SQL/filmSQL.php');
include "../Ressources/header.php";
include "./donnee/FilmDAO.php";

$idFilm = $_GET['id'];
$film = FilmDAO::detaillerFilm($idFilm);

?>

    <form action="traitement-modifier-film.php" method="post">

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?=$film->getTitre() ?>"/>
        </div>

        <label>/!\DATE NON MODIFIABLE POUR L'INSTANT/!\</label>


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