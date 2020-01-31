<?php
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";

    $nomFilm = $_GET['film'];
    $nomFilm = "'".$nomFilm."'";
    $REQUETE_SQL_FILM_NOM = "SELECT * FROM Film WHERE nom = " .$nomFilm;
    $requeteFilm = $basededonnees->prepare($REQUETE_SQL_FILM_NOM);
    $requeteFilm->execute();
    $film = $requeteFilm->fetch();  
?>

<form action="traitement-modifier-film.php" method="post">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?php echo $film['nom']?>"/>			
			</div>

			<label>/!\DATE NON MODIFIABLE POUR L'INSTANT/!\</label>
			

						
			<div>
				<label for="synopsis">Synopsis</label>
				<input type="text" name="synopsis" id="synopsis" value="<?php echo $film['synopsis']?>"/>			
			</div>
			
			
			
			<input type="submit" value="Enregistrer">
			<input type="hidden" name="id" value="<?=$film['id']?>"/>
</form>

<?php
    include "../Ressources/footer.php";
    ?>