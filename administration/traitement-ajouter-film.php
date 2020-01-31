<?php
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";
    $nom = $_POST['nom'];
    $date = $_POST['date'];   
    $synopsis = $_POST['synopsis'];   
    $SQL_AJOUTER_FILM = "INSERT INTO film(nom, date_sortie, synopsis) VALUES ('$nom','$date','$synopsis')";
    //print_r($SQL_AJOUTER_FILM);
    $requeteAjouterFilm = $basededonnees->prepare($SQL_AJOUTER_FILM);
    $reussiteAjout = $requeteAjouterFilm->execute();
    if($reussiteAjout){
        echo("<header><h1>Le film '$nom' a été ajouté</h1></header>");
    }
?>



<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
