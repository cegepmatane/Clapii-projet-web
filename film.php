<?php

require('./SQL/filmSQL.php');
include "./Ressources/header.php";
include "./Ressources/Connexion.php";

$idFilm = $_GET['id'];

$requeteFilm = $basededonnees->prepare(SELECT_FILM_BY_ID);
$requeteFilm->bindParam(":id", $idFilm, PDO::PARAM_STR);
$requeteFilm->execute();
$film = $requeteFilm->fetch();
?>

<h1> <?=$film['nom']?> </h1>
<h2> <?=$film['synopsis']?></h2>
<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
include "./Ressources/footer.php";
?>