<?php
    include "./Ressources/header.php";

    include "./Ressources/Connexion.php";

    $REQUETE_SQL_LISTE_FILM = "SELECT * FROM Film";
    $requeteFilms = $basededonnees->prepare($REQUETE_SQL_LISTE_FILM);
    $requeteFilms->execute();
    $films = $requeteFilms->fetchAll();

?>
<div class="container ">
   text
</div>

<?php
    include "./Ressources/footer.php";
    ?>
