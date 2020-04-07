<?php

include "../Donnee/CommentaireDAO.php";

echo "insertion";
if (isset($_GET['id_Film'])&&isset($_GET['id_Film'])&&isset($_GET['id_Film'])){
    $idFilm = $_GET['id_Film'];
    $commentaire = $_GET['text'];
    $idUtilisateur = $_GET['id_utilisateur'];
    CommentaireDAO::insererCommentaire($commentaire, $idFilm, $idUtilisateur);
    echo "insertion commentaire effectuee";
} else {
    echo "variables commentaires invalides";
}
