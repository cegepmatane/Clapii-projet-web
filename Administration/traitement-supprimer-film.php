<?php

    include "../Ressources/header.php";
    include "./Donnee/FilmDAO.php";
    $filtresFilm = 
	array(
		'id' => FILTER_VALIDATE_INT,
		
    );
    
    $film = filter_input_array(INPUT_POST, $filtresFilm);
    FilmDAO::supprimerFilm($film['id']);
    ?>
        <header><h1>Le film a été supprimé</h1></header>



<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
