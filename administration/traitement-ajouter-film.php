<?php

    require('../SQL/filmSQL.php');
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";


    $filtresFilm = 
	array(
		'id' => FILTER_VALIDATE_INT,
		'titre' => FILTER_SANITIZE_STRING,
		'date' => FILTER_SANITIZE_STRING,
		'synopsis' => FILTER_SANITIZE_STRING,
		
    );
    
    $film = filter_input_array(INPUT_POST, $filtresFilm);
    $SQL_AJOUTER_FILM = INSERT_FILM_BY_NOM_DATE_SYNOPSIS;
    $requeteAjouterFilm = $basededonnees->prepare($SQL_AJOUTER_FILM);
	$requeteAjouterFilm->bindParam(':titre',$film['titre'], PDO::PARAM_STR);
	$requeteAjouterFilm->bindParam(':date',$film['date'], PDO::PARAM_STR);
	$requeteAjouterFilm->bindParam(':synopsis',$film['synopsis'], PDO::PARAM_STR);
    $reussiteAjout = $requeteAjouterFilm->execute();
    $titre = $film['titre'];
    if($reussiteAjout):?>
        <header><h1>Le film <?=$titre?> a été ajouté</h1></header>
   <?php endif;?>




<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
