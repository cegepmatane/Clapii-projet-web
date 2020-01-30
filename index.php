<?php
    include "Ressources/Connexion.php";

    $REQUETE_SQL_TEST = "SELECT * FROM Film WHERE id = 1";
    $requeteTest = $basededonnees->prepare($REQUETE_SQL_TEST);
    $requeteTest->execute();
    $film = $requeteTest->fetch();
    print_r($film);
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>★Clapii★</title>
  <link rel="stylesheet" href="styles.css">

</head>

<body>
    <h1>Bienvenue!<h1>
</body>
</html>