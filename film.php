<?php

include "./Ressources/header.php";
include "./Donnee/FilmDAO.php";
include "./Donnee/CommentaireDAO.php";

$idFilm = $_GET['id'];
$film = FilmDAO::detaillerFilm($idFilm);

?>
    <script>
        function toggleCommentaire(){
            if(document.getElementsByName("idUtilisateur").length==0){
                alert("Connectez-vous pour commenter.");
            }else{
                if(document.getElementsByClassName("listeCommentaires")[0].style.display == "none"){
                    document.getElementById("ecrireCommentaire").style.display="none";
                    document.getElementById("resultats").style.display="block";
                    document.getElementById("bouton").innerHTML="Commenter";
                    document.getElementsByClassName("listeCommentaires")[0].style.display="block";
                    console.log("none");
                }
                else {

                    var idFilm = document.getElementsByName("idFilm")[0].value;
                    var idUtilisateur = document.getElementsByName("idUtilisateur")[0].value;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            if(this.responseText!=-1){
                                var commentaireXML = this.responseText;

                                parser = new DOMParser();
                                xmlDoc = parser.parseFromString(commentaireXML,"text/xml");

                                var text = xmlDoc.getElementsByTagName("text")[0].childNodes[0].nodeValue;

                                document.getElementById("commentaire").value = text;
                            }

                        }
                    };
                    xhttp.open("GET", "Action/recuperer-commentaire.php?id_film="+idFilm+"&id_utilisateur="+idUtilisateur, true);
                    xhttp.send();

                    document.getElementsByClassName("listeCommentaires")[0].style.display="none";
                    document.getElementById("resultats").style.display="none";
                    document.getElementById("bouton").innerHTML="Annuler";
                    document.getElementsByClassName("votreCommentaire")[0].style.display="block";
                    document.getElementById("ecrireCommentaire").style.display="block";
                    console.log("!none");
                }
            }
            monCommentaire();

        }

        function envoyerCommentaire(){
            if(document.getElementById("commentaire").value!=''){
                var com = document.getElementById("commentaire").value;
                var idFilm = document.getElementsByName("idFilm")[0].value;
                var idUtilisateur = document.getElementsByName("idUtilisateur")[0].value;

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText==-1){
                            nouveauCommentaire(idFilm,idUtilisateur,com);
                        }else{
                            modifierCommentaire(idFilm,idUtilisateur,com);
                        }
                        toggleCommentaire();
                    }
                };
                var reponse = xhttp.open("GET", "Action/recuperer-commentaire.php?id_film="+idFilm+"&id_utilisateur="+idUtilisateur, true);
                xhttp.send();
            }else{
                alert("Le commentaire est vide.");
            }

        }

        function nouveauCommentaire(idFilm,idUtilisateur,com) {
            var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            xhttp.open("POST", "/Clapii-projet-web/Action/traitement-ajouter-commentaire.php", true);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState>3 && xhttp.status==200) { console.log(xhttp.responseText);}
            };
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id_utilisateur="+idUtilisateur+"&id_film="+idFilm+"&text="+com);
        }

        function modifierCommentaire(idFilm,idUtilisateur,com){
            var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
            xhttp.open("POST", "/Clapii-projet-web/Action/traitement-modification-commentaire.php", true);
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState>3 && xhttp.status==200) { console.log(xhttp.responseText);}
            };
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id_utilisateur="+idUtilisateur+"&id_film="+idFilm+"&text="+com);
        }

        function monCommentaire(){
            if (document.getElementsByClassName("listeCommentaires")[0].style.display == "block"&& document.getElementsByName("pseudoUtilisateur").length!=0){
                var idFilm = document.getElementsByName("idFilm")[0].value;
                var idUtilisateur = document.getElementsByName("idUtilisateur")[0].value;
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        if(this.responseText!=-1){
                            var commentaireXML = this.responseText;

                            parser = new DOMParser();
                            xmlDoc = parser.parseFromString(commentaireXML,"text/xml");

                            var text = xmlDoc.getElementsByTagName("text")[0].childNodes[0].nodeValue;

                            document.getElementById("monCommentaire").textContent = text;
                            document.getElementById("commentaireEnregistre").style.display="block";
                            document.getElementById("pseudo").textContent=document.getElementsByName("pseudoUtilisateur")[0].value;
                            document.getElementsByClassName("votreCommentaire")[0].style.display="block";
                        }else{
                            document.getElementsByClassName("votreCommentaire")[0].style.display="none";
                            document.getElementById("commentaire").value = null;
                        }

                    }
                };
                xhttp.open("GET", "Action/recuperer-commentaire.php?id_film="+idFilm+"&id_utilisateur="+idUtilisateur, true);
                xhttp.send();
            }else{
                document.getElementById("commentaireEnregistre").style.display="none";
            }
        }

        function suppressionCommentaire(){

            var suppression = confirm("Etes-vous sûr de vouloir supprimer votre commentaire ?");
            if(suppression){
                console.log("A supprimer");
                var idFilm = document.getElementsByName("idFilm")[0].value;
                var idUtilisateur = document.getElementsByName("idUtilisateur")[0].value;
                var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
                xhttp.open("POST", "/Clapii-projet-web/Action/traitement-suppression-commentaire.php", true);
                xhttp.onreadystatechange = function() {
                    if (xhttp.readyState>3 && xhttp.status==200) { console.log(xhttp.responseText);}
                };
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("id_utilisateur="+idUtilisateur+"&id_film="+idFilm);
                console.log(xhttp.responseText);
                monCommentaire();
            }else{
                console.log("Annuler");
            }
        }



    </script>

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

    <div class="votreCommentaire" style="display: none;">
        <div class="container" >
            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title" >Mon commentaire</span>
                    <div id="commentaireEnregistre" style="display: block;">
                        <ul class="collection">
                            <li class="collection-item">
                                <div class="row valign-wrapper">
                                    <div class="col s2">
                                        <img class="thumbnail" src="Ressources/Images/PlaceHolder.jpg">
                                    </div>
                                    <div class="col s10">
                                        <b id="pseudo"></b>
                                        <p id="monCommentaire">  </p>
                                    </div>
                                    <div class="col s2">
                                        <a class="waves-effect waves-teal btn-flat" onclick="toggleCommentaire()"><i class="material-icons">create</i></a>
                                        <a class="waves-effect waves-teal btn-flat" onclick="suppressionCommentaire()"><i class="material-icons">delete</i></a>
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s9 offset-s6"><a class="waves-effect waves-light btn" id="envoie" onclick="envoyerCommentaire()"><i class="material-icons right">send</i>Envoyer</a></div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="listeCommentaires" style="display: block;">
        <div class="container" >
            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Commentaires</span>
                    <div >
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

                </div>
                <div class="card-action" id="resultats">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>

        </div>
    </div>



    <a href="liste_film.php" class="brown lighten-2 btn"><i class="material-icons left">arrow_back</i>Retour</a>
    <input type= hidden name="idFilm" value=<?= $idFilm?> >
    <?php if(isset($_SESSION['id'])):?>
        <input type=hidden name="idUtilisateur" value=<?php echo $_SESSION['id'] ?>>
        <input type=hidden name="pseudoUtilisateur" value=<?php echo $_SESSION['pseudo'] ?>>
    <?php endif; ?>
    <?php echo '<script> monCommentaire();</script>'; ?>

<?php
include "./Ressources/footer.php";
?>