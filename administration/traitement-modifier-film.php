<?php

    require('../SQL/filmSQL.php');
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";
    $filtresFilm = 
	array(
		'id' => FILTER_VALIDATE_INT,
		'titre' => FILTER_SANITIZE_STRING,
		'synopsis' => FILTER_SANITIZE_STRING,
		
    );
    
    $film = filter_input_array(INPUT_POST, $filtresFilm);  
    $SQL_MODIFIER_FILM = UPDATE_FILM_NOM_SYNOPSIS_BY_ID;
    $requeteModifierFilm = $basededonnees->prepare($SQL_MODIFIER_FILM);
    $requeteModifierFilm->bindParam(':id',$film['id'], PDO::PARAM_INT);
    $requeteModifierFilm->bindParam(':titre',$film['titre'], PDO::PARAM_STR);
	$requeteModifierFilm->bindParam(':synopsis',$film['synopsis'], PDO::PARAM_STR);
    $reussiteModification = $requeteModifierFilm->execute();
    if($reussiteModification):?>
        <header><h1>Le film a été modifié</h1></header>
    <?php  endif; ?>



<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
