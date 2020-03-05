<?php

include "../Ressources/header.php";

include "./Donnee/FilmDAO.php";
$films = FilmDAO::listerFilms();
?>
<h1>Vous êtes en mode admin!!!</h1>
<div>
    <ul>
        <?php foreach ($films as $film):?>
            <li class="tooltip-film">
                <a href="./modifier-film.php?id=<?= $film->getId() ?>" >
                    <img class="thumbnail" src="../Ressources/Images/PlaceHolder.jpg">
                    <span class="tooltiptext"> <?= $film->getTitre() ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<a href="./ajouter-film.php" class="brown lighten-2 btn"><i class="material-icons right">backup</i>Ajouter un film</a>


<?php
    include "../Ressources/footer.php";
?>
