<?php

    
    include "../Ressources/header.php";
    include "./donnee/FilmDAO.php";


    $filtresFilm = 
	array(
		'id' => FILTER_VALIDATE_INT,
		'titre' => FILTER_SANITIZE_STRING,
		'date' => FILTER_SANITIZE_STRING,
		'synopsis' => FILTER_SANITIZE_STRING,
		
    );
    
    $film = filter_input_array(INPUT_POST, $filtresFilm);
    $objetFilm = new Film(1,$film['titre'],$film['synopsis'],$film['date']);
    FilmDAO::insererFilm($objetFilm);
    ?>
    <header><h1>Le film <?=$objetFilm->getTitre()?> a été ajouté</h1></header>





<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
