<?php

include "../Donnee/CommentaireDAO.php";

if (isset($_POST['id_film']) && isset($_POST['id_utilisateur']) && isset($_POST['text'])){
    $idFilm = $_POST['id_film'];
    $commentaire = $_POST['text'];
    $idUtilisateur = $_POST['id_utilisateur'];
    CommentaireDAO::insererCommentaire($commentaire, $idFilm, $idUtilisateur);
    echo "insertion commentaire effectuee";
} else {
    echo "variables commentaire invalides";
}
