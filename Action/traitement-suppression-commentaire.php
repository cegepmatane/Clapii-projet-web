<?php

include "../Donnee/CommentaireDAO.php";

if (isset($_POST['id_film']) && isset($_POST['id_utilisateur']) ){
    $idFilm = $_POST['id_film'];
    $idUtilisateur = $_POST['id_utilisateur'];
    $idCommentaire = CommentaireDAO::recupererCommentaireParIdUtilisateurEtIdFilm($idUtilisateur,$idFilm)->getId();

    CommentaireDAO::supprimerCommentaireParId( $idCommentaire);
    echo "suppression commentaire effectuee";
} else {
    echo "variables invalides";
}
