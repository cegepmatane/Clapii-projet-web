<?php
    include "../Ressources/header.php";

    include "../Ressources/Connexion.php";

    $REQUETE_SQL_LISTE_FILM = SELECT_ALL_FILM;
    $requeteFilms = $basededonnees->prepare($REQUETE_SQL_LISTE_FILM);
    $requeteFilms->execute();
    $films = $requeteFilms->fetchAll();

?>
<h1>Vous êtes en mode admin!!!</h1>
<div>
    <ul>
        <?php foreach ($films as $film):?>
            <li class="tooltip-film">
                <a href="./modifier-film.php?id=<?= $film['id'] ?>" >
                    <img class="thumbnail" src="Ressources/images/PlaceHolder.jpg"> 
                    <span class="tooltiptext"> <?= $film['nom'] ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<a href="./ajouter-film.php" class="brown lighten-2 btn"><i class="material-icons right">backup</i>Ajouter un film</a>


<?php
    include "../Ressources/footer.php";
?>
