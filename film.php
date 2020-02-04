<?php

require('./SQL/filmSQL.php');
include "./Ressources/header.php";
include "./Ressources/Connexion.php";

$nomFilm = $_GET['film'];

$requeteFilm = $basededonnees->prepare(SELECT_FILM_BY_NOM);
$requeteFilm->bindParam(":nom", $nomFilm, PDO::PARAM_STR);
$requeteFilm->execute();
$film = $requeteFilm->fetch();
//print_r($film);
echo("<h1>" . $film['nom'] . "</h1>");
echo("<h2>" . $film['synopsis'] . "</h2>");
echo("<a href=\"films.php\" class=\"brown lighten-2 btn\"><i class=\"material-icons left\">arrow_back</i>Retour</a>")

?>

<?php
include "./Ressources/footer.php";
?>