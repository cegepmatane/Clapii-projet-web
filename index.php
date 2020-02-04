<?php
include "./Ressources/header.php";

include "./Ressources/Connexion.php";

require('./SQL/filmSQL.php');

$requeteFilms = $basededonnees->prepare(SELECT_ALL_FILM);
$requeteFilms->execute();
$films = $requeteFilms->fetchAll();
?>
<div class="container">
    <div class="row">

        <div class="col s4">

            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Les derniers films</span>
                    <ul class="collection">
                        <?php foreach ($films as $film) {
                            include("./Vues/Fragment/filmAccueil.php");
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
                    <span class="card-title">Top commentaires</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                    <a href="#">Plus de résultats</a>
                </div>
            </div>


        </div>

    </div>
</div>

<?php
include "./Ressources/footer.php";
?>
