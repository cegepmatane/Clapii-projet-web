<?php

require('./PhpSQL/filmSQL.php');
include "./Ressources/header.php";

include "./Donnee/FilmDAO.php";
$films = FilmDAO::listerFilms();
?>

<div>
    <ul>
        <?php foreach ($films as $film) :?>
            <li class="tooltip-film">
                <a href="./film.php?id= <?=$film->getId(); ?> ">
                    <img class="thumbnail" src="Ressources/Images/PlaceHolder.jpg">
                    <span class="tooltiptext"><?= $film->getTitre(); ?> </span>
                </a>

            </li>
        <?php endforeach;?>
    </ul>
</div>

<?php
include "./Ressources/footer.php";
?>
