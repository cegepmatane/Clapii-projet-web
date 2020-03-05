<?php

include "../Ressources/header.php";
include "./Donnee/FilmDAO.php";

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

        <div>
				<label for="origine">Origine</label>
				<input type="text" name="origine" id="origine" value="<?= $film->getOrigine() ?>"/>			
		</div>

		<div>
				<label for="duree">Durée (minutes)</label>
				<input type="text" name="duree" id="duree" value="<?= $film->getDuree() ?>"/>			
		</div>


        <button class="btn waves-effect brown lighten-2" type="submit" name="action">Enregistrer
                        <i class="material-icons right">send</i>
        </button>
        <input type="hidden" name="id" value="<?= $film->getId() ?>"/>
    </form>
    <form action="traitement-supprimer-film.php" method="post">
        <button class="btn waves-effect brown lighten-2" type="submit" name="action">Supprimer
                        <i class="material-icons right">send</i>
        </button>
        <input type="hidden" name="id" value="<?= $film->getId() ?>"/>
    </form>


<?php
include "../Ressources/footer.php";
?>