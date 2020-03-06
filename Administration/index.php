<?php
include "./Ressources/header.php";

include "./Donnee/FilmDAO.php";


$limit = 4 ;

$films = FilmDAO::listerFilms();
?>
<h1>Vous êtes en mode admin!!!</h1>
<div class="container">
    <div class="row">

        
        <div class="col s4">


            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Liste des transactions</span>
                    
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
