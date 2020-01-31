<?php
    include "./Ressources/header.php";
    include "./Ressources/Connexion.php";

    $nomFilm = $_GET['film'];
    $nomFilm = "'".$nomFilm."'";
    //print_r($nomFilm);
    $REQUETE_SQL_FILM_NOM = "SELECT * FROM Film WHERE nom = " .$nomFilm;
    //print_r($REQUETE_SQL_FILM_NOM);
    $requeteFilm = $basededonnees->prepare($REQUETE_SQL_FILM_NOM);
    $requeteFilm->execute();
    $film = $requeteFilm->fetch();
    //print_r($film);
    echo("<h1>".$film['nom']."</h1>");
    echo("<h2>".$film['synopsis']."</h2>");
    echo("<a href=\"films.php\" class=\"brown lighten-2 btn\"><i class=\"material-icons left\">arrow_back</i>Retour</a>")
    
?>

<?php
    include "./Ressources/footer.php";
    ?>