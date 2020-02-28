<?php
    include "../Ressources/header.php";
    include "./donnee/FilmDAO.php"; 
?>

<form action="traitement-ajouter-film.php" method="post">
		
			<div>
				<label for="titre">Titre</label>
				<input type="text" name="titre" id="titre" value="Titre"/>
			</div>

			<div>
				<label for="date">Date (aaaa-mm-jj)</label>
				<input type="text" name="date" id="date" value="2020-01-01"/>			
			</div>
			

						
			<div>
				<label for="synopsis">Synopsis</label>
				<input type="text" name="synopsis" id="synopsis" value="Synopsis"/>			
			</div>
			
			
			
			<input type="submit" value="Enregistrer">
</form>

<?php
    include "../Ressources/footer.php";
    ?>