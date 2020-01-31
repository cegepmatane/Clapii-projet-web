<?php
    include "./Ressources/header.php";

    include "./Ressources/Connexion.php";

    $REQUETE_SQL_LISTE_FILM = "SELECT * FROM Film";
    $requeteFilms = $basededonnees->prepare($REQUETE_SQL_LISTE_FILM);
    $requeteFilms->execute();
    $films = $requeteFilms->fetchAll();

?>





<header>
    <h1>Bienvenue!</h1>
</header>
<div class="container">
    <ul>
        <?php foreach($films as $film){
            //print_r($films["id"]);
            echo("<li class=\"tooltip-film\"><a href=\"./film.php?film=". $film['nom'] ."\"><img class=\"thumbnail\" src=\"Ressources/images/PlaceHolder.jpg\"> <span class=\"tooltiptext\">" . $film['nom'] . "</a></span></li>");
        }
        ?>
    </ul>
</div>
<?php
    include "./Ressources/footer.php";
    ?>
