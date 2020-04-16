<?php
include "../Donnee/CommentaireDAO.php";

if (isset($_GET['id_film']) && isset($_GET['id_utilisateur'])) {

    $idFilm = $_GET['id_film'];
    $idUtilisateur = $_GET['id_utilisateur'];

    $commentaire = CommentaireDAO::recupererCommentaireParIdUtilisateurEtIdFilm($idUtilisateur,$idFilm);
    if ($commentaire->getId()==null){
        echo -1;
    }else{
        echo "<commentaire id='" . $commentaire->getId() . "'>" .
            "<id_utilisateur>" . $commentaire->getIdUtilisateur() . "</id_utilisateur>" .
            "<id_film>" . $commentaire->getIdFilm() . "</id_film>" .
            "<text>" . $commentaire->getText() . "</text>" .
            "</commentaire>";
    }

} else {
    echo -1;
}