<?php

include "./Ressources/header.php";

include "./Donnee/FilmDAO.php";
$films = FilmDAO::listerFilms();
echo count($films);
?>

<div>
    <div class="row">
        <div class="col s3">
        </div>

        <div class="col s9">
            <?php for ($i = 0; $i < count($films); $i += 4) : ?>
                <div class="row">
                    <div class="col s3">
                        <div id="<?= $films[$i]->getId();?>" class="card">
                            <div class="card-image">
                                <img class="" src="./Ressources/Images/PlaceHolder.jpg">
                            </div>
                        </div>
                    </div>
                    <?php if ($i + 1 < count($films)) : ?>
                        <div class="col s3">
                            <div id="<?= $films[$i+1]->getId();?>" class="card">
                                <div class="card-image">
                                    <img class="" src="./Ressources/Images/PlaceHolder.jpg">
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    <?php if ($i + 2 < count($films)) : ?>
                        <div class="col s3">
                            <div id="<?= $films[$i+2]->getId();?>" class="card">
                                <div class="card-image">
                                    <img class="" src="./Ressources/Images/PlaceHolder.jpg">
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                    <?php if ($i + 3 < count($films)) : ?>
                        <div class="col s3">
                            <div id="<?= $films[$i+3]->getId();?>" class="card">
                                <div class="card-image">
                                    <img class="" src="./Ressources/Images/PlaceHolder.jpg">
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>

<script>

    let listeFilm = Array.from(document.getElementsByClassName("card"));
    listeFilm.forEach(ajouterMouseOverEtOut);

    function ajouterMouseOverEtOut(item, index) {
        item.onmouseover = function () {
            mouseOver()
        };
        item.onmouseout = function () {
            mouseOut()
        };
    }

    function mouseOver() {
        console.log("over");
    }

    function mouseOut() {
        console.log("out");
    }

</script>

<?php
include "./Ressources/footer.php";
?>
