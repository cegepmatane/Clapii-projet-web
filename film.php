<?php

include "./Ressources/header.php";
include "./Donnee/FilmDAO.php";

$idFilm = $_GET['id'];
$film = FilmDAO::detaillerFilm($idFilm);

?>

    <div class="container">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s3">
                    <img src="Ressources/Images/PlaceHolder.jpg" alt="" class="responsive-img">
                    <!-- notice the "circle" class -->
                </div>
                <div class="col s7">
                    <h1><?= $film->getTitre(); ?> </h1>
                    <p><b>Origine : </b>$origine</p>
                    <p><b>Durée : </b>$duree</p>
                    <p><b>Année de sortie : </b><?= $film->getDate(); ?></p>
                    <p><b>Genre : </b>$genre</p>
                    <p><b>Casting : </b>$acteur1, $acteur2, $acteur3, $acteur4</p>
                    <p style="text-align:justify"><b>Synopsis: </b><?= $film->getSynopsis(); ?>
                    </p>
                </div>
                <div class="col s2">
                    <button class="waves-effect waves-light btn-large" onclick="toggleCommentaire()" id="bouton">Commenter</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="center-align">
                <p>
                    <span style="margin: 0 10px"><b>Allocine </b>6/10</span>
                    <span style="margin: 0 10px"><b>Allocine </b>6/10</span>
                    <span style="margin: 0 10px"><b>Allocine </b>6/10</span>
                    <span style="margin: 0 10px"><b>Allocine </b>6/10</span>
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card grey lighten-4">
            <div class="card-content brown-text text-darken-3">
                <span class="card-title" id="com">Commentaires</span>
                <div id="listerCommentaires" style="display: block;">
                    <ul class="collection">
                        <li class="collection-item">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img class="thumbnail" src="Ressources/Images/PlaceHolder.jpg">
                                </div>
                                <div class="col s8">
                                    <b>Pseudo</b>
                                    <p style="text-align:justify">Etiam lectus eros, vestibulum eu iaculis non, tempor
                                        vitae eros. Nullam vitae scelerisque dolor.
                                        Curabitur sollicitudin facilisis lectus. Suspendisse potenti. Fusce sit amet
                                        diam nulla. Ut et aliquet lorem.
                                        Quisque sit amet nisi est. Donec et ipsum ut elit finibus molestie. Ut ac metus
                                        quis est feugiat gravida ac
                                        in felis. Duis a justo nisl. In condimentum convallis mattis. </p>
                                </div>
                                <div class="col s3">
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                </div>
                                <div class="col s1">
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_upward</i></a>
                                    </div>
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_downward</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img class="thumbnail" src="Ressources/Images/PlaceHolder.jpg">
                                </div>
                                <div class="col s8">
                                    <b>Pseudo</b>
                                    <p style="text-align:justify">Etiam lectus eros, vestibulum eu iaculis non, tempor
                                        vitae eros. Nullam vitae scelerisque dolor.
                                        Curabitur sollicitudin facilisis lectus. Suspendisse potenti. Fusce sit amet
                                        diam nulla. Ut et aliquet lorem.
                                        Quisque sit amet nisi est. Donec et ipsum ut elit finibus molestie. Ut ac metus
                                        quis est feugiat gravida ac
                                        in felis. Duis a justo nisl. In condimentum convallis mattis. </p>
                                </div>
                                <div class="col s3">
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                </div>
                                <div class="col s1">
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_upward</i></a>
                                    </div>
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_downward</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row valign-wrapper">
                                <div class="col s2">
                                    <img class="thumbnail" src="Ressources/Images/PlaceHolder.jpg">
                                </div>
                                <div class="col s8">
                                    <b>Pseudo</b>
                                    <p style="text-align:justify">Etiam lectus eros, vestibulum eu iaculis non, tempor
                                        vitae eros. Nullam vitae scelerisque dolor.
                                        Curabitur sollicitudin facilisis lectus. Suspendisse potenti. Fusce sit amet
                                        diam nulla. Ut et aliquet lorem.
                                        Quisque sit amet nisi est. Donec et ipsum ut elit finibus molestie. Ut ac metus
                                        quis est feugiat gravida ac
                                        in felis. Duis a justo nisl. In condimentum convallis mattis. </p>
                                </div>
                                <div class="col s3">
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                    <i class="material-icons">movie_filter</i>
                                </div>
                                <div class="col s1">
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_upward</i></a>
                                    </div>
                                    <div><a class="waves-effect waves-teal btn-flat"><i class="material-icons">arrow_downward</i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="ecrireCommentaire" style="display: none;">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="center-align">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="commentaire" class="materialize-textarea"></textarea>
                                        <label for="textarea">Votre commentaire</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s9 offset-s6"><a class="waves-effect waves-light btn" onclick="envoyerCommentaire()"><i class="material-icons right">send</i>Envoyer</a></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action" id="resultats">
                <a href="#">Plus de résultats</a>
            </div>
        </div>

    </div>
    <a href="liste_film.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>

<script>
    function toggleCommentaire(){

        if(document.getElementById("listerCommentaires").style.display == "none"){
            document.getElementById("ecrireCommentaire").style.display="none";
            document.getElementById("resultats").style.display="block";
            document.getElementById("bouton").innerHTML="Commenter";
            document.getElementById("com").innerHTML="Commentaires";
            document.getElementById("listerCommentaires").style.display="block";
            console.log("none");
        }
        else if(document.getElementById("listerCommentaires").style.display == "block"){
            document.getElementById("listerCommentaires").style.display="none";
            document.getElementById("resultats").style.display="none";
            document.getElementById("bouton").innerHTML="Annuler";
            document.getElementById("com").innerHTML="Commentaire";
            document.getElementById("ecrireCommentaire").style.display="block";
            console.log("!none");
        }

    }

    function envoyerCommentaire(){
        var com = document.getElementById("commentaire").value;
        var film = <?php echo $_GET['id']?>;

        var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        xhttp.open("POST", "/Clapii-projet-web/Action/traitement-ajouter-commentaire.php", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) { console.log(xhttp.responseText);}
        };
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id_utilisateur=1&id_film="+film+"&text="+com);

    }

</script>

<?php
include "./Ressources/footer.php";
?>