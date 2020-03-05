<?php

    
    include "../Ressources/header.php";
    include "./Donnee/UtilisateurDAO.php";


    $filtresUtilisateur = 
	array(
		'id' => FILTER_VALIDATE_INT,
		'pseudo' => FILTER_SANITIZE_STRING,
		'nom' => FILTER_SANITIZE_STRING,
        'prenom' => FILTER_SANITIZE_STRING,
        'mail' => FILTER_SANITIZE_STRING,
        'password' => FILTER_SANITIZE_STRING,
		
    );
    
    $utilisateur = filter_input_array(INPUT_POST, $filtresUtilisateur);
    $objetUtilisateur = new Utilisateur(1,$utilisateur['pseudo'],
    $utilisateur['nom'],
    $utilisateur['prenom'],
    $utilisateur['mail'], 
    $utilisateur['password']);
    UtilisateurDAO::insererUtilisateur($objetUtilisateur);
    ?>
    <header><h1>Vous êtes maintenant inscrit, <?=$objetUtilisateur->getPseudo()?>!</h1></header>





<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
