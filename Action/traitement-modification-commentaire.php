<?php
include "../Donnee/CommentaireDAO.php";

if (isset($_POST['id_utilisateur']) && isset($_POST['id_film']) && isset($_POST['text'])) {
    $idFilm = $_POST['id_film'];
    $text = $_POST['text'];
    $idUtilisateur = $_POST['id_utilisateur'];
    $idCommentaire = CommentaireDAO::recupererCommentaireParIdUtilisateurEtIdFilm($idUtilisateur,$idFilm)->getId();

    CommentaireDAO::modifierCommentaireParId($idCommentaire,$text);
    echo "modification commentaire effectuee";
} else {
    echo "variables commentaire invalides";
}