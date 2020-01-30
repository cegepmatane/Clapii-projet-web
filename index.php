<?php
    include "header.php";

    include "Ressources/Connexion.php";

    $REQUETE_SQL_LISTE_FILM = "SELECT * FROM Film";
    $requeteFilms = $basededonnees->prepare($REQUETE_SQL_LISTE_FILM);
    $requeteFilms->execute();
    $films = $requeteFilms->fetchAll();
    
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>★Clapii★</title>
    <link rel="stylesheet" href="Ressources/styles.css">
</head>


<body>
<header>
    <h1>Bienvenue!</h1>
</header>
<div>
    <ul>
        <?php foreach($films as $film){
            //print_r($films["id"]);
            echo("<li class=\"tooltip\"><a href=\"vues/film.php?film=". $film['nom'] ."\"><img class=\"thumbnail\" src=\"Ressources/images/PlaceHolder.jpg\"> <span class=\"tooltiptext\">" . $film['nom'] . "</a></span></li>");
        }
        ?>    
    </ul>
</div>
<?php
    include "footer.php";
    ?>
</body>
</html>