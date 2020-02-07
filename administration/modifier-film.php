<?php

require('../SQL/filmSQL.php');
include "../Ressources/header.php";
include "../Ressources/Connexion.php";

$nomFilm = $_GET['film'];

$requeteFilm = $basededonnees->prepare(SELECT_FILM_BY_NOM);
$requeteFilm->bindParam(":nom", $nomFilm, PDO::PARAM_STR);
$requeteFilm->execute();
$film = $requeteFilm->fetch();
?>

    <form action="traitement-modifier-film.php" method="post">

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?=$film['nom'] ?>"/>
        </div>

        <label>/!\DATE NON MODIFIABLE POUR L'INSTANT/!\</label>


        <div>
            <label for="synopsis">Synopsis</label>
            <input type="text" name="synopsis" id="synopsis" value="<?= $film['synopsis'] ?>"/>
        </div>


        <input type="submit" value="Enregistrer">
        <input type="hidden" name="id" value="<?= $film['id'] ?>"/>
    </form>

<?php
include "../Ressources/footer.php";
?>