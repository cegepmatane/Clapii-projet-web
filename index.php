<?php
    include "header.php";

    include "Ressources/Connexion.php";

    $REQUETE_SQL_TEST = "SELECT * FROM Film WHERE id = 1";
    $requeteTest = $basededonnees->prepare($REQUETE_SQL_TEST);
    $requeteTest->execute();
    $film = $requeteTest->fetch();
    print_r($film);
?>


<div>

    <h1>Bienvenue!<h1>
    
<div>


<?php
    include "footer.php";
    ?>