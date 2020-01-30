<?php
    include "header.php";

    include "Ressources/Connexion.php";

    $REQUETE_SQL_TEST = "SELECT * FROM Film WHERE id = 1";
    $requeteTest = $basededonnees->prepare($REQUETE_SQL_TEST);
    $requeteTest->execute();
    $film = $requeteTest->fetch();
    print_r($film);
?>


<div class="container ">

    <h1 class="grey-text text-darken-3">Bienvenue!<h1>
    <div class="card-panel grey lighten-4">
        <span class="brown-text text-darken-3">This is a card panel with dark blue text</span>
    </div>
<div>


<?php
    include "footer.php";
    ?>