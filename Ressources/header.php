<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>★Clapii★</title>


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="Css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="brown lighten-4">
 <nav>
    <div class="nav-wrapper grey lighten-4 ">
          <a href="index.php" class="brand-logo brown-text text-darken-3">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li ><a  class="brown-text text-darken-3" href="index.php">Accueil</a></li>
            <li ><a  class="brown-text text-darken-3" href="liste_.php">Films</a></li>
            <li class="barre-recherche"><form>
                 <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon " for="search"><i class="material-icons brown-text text-darken-3">search</i></label>
                    <i class="material-icons brown-text text-darken-3">close</i>
                  </div>
             </form></li >
              <li ><a href="inscription_connexion.php"><i class="material-icons brown-text text-darken-3">account_circle</i></a></li >

          </ul>

    </div>
  </nav>
