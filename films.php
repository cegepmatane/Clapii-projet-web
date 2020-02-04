<?php
    include "./Ressources/header.php";

    include "./Ressources/Connexion.php";

    $requeteFilms = $basededonnees->prepare(SELECT_ALL_FILM);
    $requeteFilms->execute();
    $films = $requeteFilms->fetchAll();
?>

<div>
    <ul>
        <?php foreach($films as $film){
            echo("<li class=\"tooltip-film\"><a href=\"./film.php?film=". $film['nom'] ."\"><img class=\"thumbnail\" src=\"Ressources/images/PlaceHolder.jpg\"> <span class=\"tooltiptext\">" . $film['nom'] . "</a></span></li>");
        }
        ?>
    </ul>
</div>

<?php
    include "./Ressources/footer.php";
    ?>
