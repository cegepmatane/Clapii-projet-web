<?php
    include "header.php";

    include "Ressources/Connexion.php";

    $REQUETE_SQL_TEST = "SELECT * FROM Film";
    $requeteTest = $basededonnees->prepare($REQUETE_SQL_TEST);
    $requeteTest->execute();
    $films = $requeteTest->fetchAll();
    
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
            echo("<li class=\"tooltip\"><img class=\"thumbnail\" src=\"Ressources/images/PlaceHolder.jpg\"> <span class=\"tooltiptext\">" . $film['nom'] . "</span></li>");
        }
        ?>    
    </ul>
</div>
<?php
    include "footer.php";
    ?>
</body>
</html>