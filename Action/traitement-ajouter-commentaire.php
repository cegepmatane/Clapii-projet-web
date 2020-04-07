<?php

include "../Donnee/CommentaireDAO.php";

if (isset($_GET['id_film']) && isset($_GET['id_utilisateur']) && isset($_GET['text'])){
    $idFilm = $_GET['id_film'];
    $commentaire = $_GET['text'];
    $idUtilisateur = $_GET['id_utilisateur'];
    CommentaireDAO::insererCommentaire($commentaire, $idFilm, $idUtilisateur);
    echo "insertion commentaire effectuee";
} else {
    echo "variables commentaire invalides";
}
