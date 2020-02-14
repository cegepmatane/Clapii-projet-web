<?php

require('../SQL/filmSQL.php');
include "../Ressources/header.php";
include "../Ressources/Connexion.php";

$titreFilm = $_GET['film'];

$requeteFilm = $basededonnees->prepare(SELECT_FILM_BY_NOM);
$requeteFilm->bindParam(":titre", $titreFilm, PDO::PARAM_STR);
$requeteFilm->execute();
$film = $requeteFilm->fetch();
?>

    <form action="traitement-modifier-film.php" method="post">

        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?=$film['titre'] ?>"/>
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