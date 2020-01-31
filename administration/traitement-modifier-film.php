<?php
    include "../Ressources/header.php";
    include "../Ressources/Connexion.php";
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $synopsis = $_POST['synopsis'];   
    $SQL_MODIFIER_FILM = "UPDATE film SET nom = '$nom', synopsis='$synopsis' WHERE id = " . $id;
    $requeteModifierFilm = $basededonnees->prepare($SQL_MODIFIER_FILM);
    $reussiteModification = $requeteModifierFilm->execute();
    if($reussiteModification){
        echo("<header><h1>Le film a été modifié</h1></header>");
    }
?>



<a href="films.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<?php
    include "../Ressources/footer.php";
?>
