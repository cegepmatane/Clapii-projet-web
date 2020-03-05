<?php
include "./Ressources/header.php";

include "./Donnee/FilmDAO.php";


$limit = 4 ;

$films = FilmDAO::listerFilms();
?>
<div class="container">
    <div class="row">

        <div class="col s4">

            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les derniers films</span>
                    <ul class="collection">
                        <?php foreach ($films as $film) {
                            include("./Vues/Fragment/film-accueil.php");
                        } ?>
                    </ul>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>

        </div>
        <div class="col s4">


            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les films les mieux notés</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>


        </div>
        <div class="col s4">


            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les films les plus mal notés</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>


        </div>

    </div>
    <div class="row">

        <div class="col s4">

            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les films les plus commentés</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>

        </div>
        <div class="col s4">


            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les derniers commentaires</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>


        </div>
        <div class="col s4">

            
            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Film le plus récent</span>
                    <p id="film-recent">Indisponible!</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>
            
            <script>
                var Ajax = new XMLHttpRequest();
                
                Ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var reponse = JSON.parse(this.responseText);
                    console.log(reponse);
                    accederFilmRecent(reponse);
                }
                };
                Ajax.open("GET", "./Action/recuperer-dernier-film.php", true);
                Ajax.send();
                function accederFilmRecent(reponse) {                
                    document.getElementById("film-recent").innerHTML = "<a href=\"./film.php?id="+ reponse['id'] +"\">"+ reponse['titre'] +"</a>";
                }
            </script>

        </div>

    </div>
</div>

<?php
include "./Ressources/footer.php";
?>
