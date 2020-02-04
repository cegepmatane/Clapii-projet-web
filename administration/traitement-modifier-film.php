<?php
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";
    //$id = $_POST['id'];
    //$nom = $_POST['nom'];
    //$synopsis = $_POST['synopsis']; 
    $filtresFilm = 
	array(
		'id' => FILTER_VALIDATE_INT,
		'nom' => FILTER_SANITIZE_STRING,
		'synopsis' => FILTER_SANITIZE_STRING,
		
    );
    
    $film = filter_input_array(INPUT_POST, $filtresFilm);  
    $SQL_MODIFIER_FILM = "UPDATE film SET nom = :nom, synopsis= :synopsis WHERE id = :id";
    $requeteModifierFilm = $basededonnees->prepare($SQL_MODIFIER_FILM);
    $requeteModifierFilm->bindParam(':id',$film['id'], PDO::PARAM_INT);
    $requeteModifierFilm->bindParam(':nom',$film['nom'], PDO::PARAM_STR);
	//$requeteModifierFilm->bindParam(':date',$film['date'], PDO::PARAM_STR);
	$requeteModifierFilm->bindParam(':synopsis',$film['synopsis'], PDO::PARAM_STR);
    $reussiteModification = $requeteModifierFilm->execute();
    if($reussiteModification){
        echo("<header><h1>Le film a été modifié</h1></header>");
    }
?>



<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
