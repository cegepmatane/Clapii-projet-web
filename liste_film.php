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

                    <?php for ($j = $i; $j < count($films) || $j < $i += 4; $j++) : ?>
                        <div class="col s3 ">
                            <div id="<?= $films[$j]->getId(); ?>" class="card" >
                                <div class="card-image">
                                    <img class="" src="./Ressources/Images/PlaceHolder.jpg">
                                    <span class="card-title"><?= $films[$j]->getTitre(); ?></span>
                                </div>
                                <div class="card-content" style="display: none">
                                    <div class="filmDate"></div>
                                    <div class="filmSysnopsis"></div>

                                </div>
                            </div>
                        </div>

                    <?php endfor; ?>

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
            let cardContent = document.getElementById(item.id).getElementsByClassName('card-content')[0];
            cardContent.style = ""
            mouseOver(item.id, cardContent);
         };

        item.onmouseout = function () {
            mouseOut(item.id);
            document.getElementById(item.id).getElementsByClassName('card-content')[0].style.display = "none";
        };
    }

    function mouseOver(id, cardContent) {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                var filmXML = this.responseText;

                afficherFilmDetail(filmXML, cardContent);
            }
        };
        xhttp.open("GET", "Action/recuperer-details-film.php?idFilm=" + id, true);
        xhttp.send();

        console.log("over sur " + id);

    }

    function mouseOut(id) {
        console.log("out");

    }

    function afficherFilmDetail(filmXML, cardContent) {
        console.log(filmXML);

        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(filmXML, "text/xml");
        console.log(xmlDoc);

        var date = xmlDoc.getElementsByTagName("date")[0].childNodes[0].nodeValue;
        cardContent.getElementsByClassName("filmDate")[0].innerHTML= date;
        var synopsis = xmlDoc.getElementsByTagName("synopsis")[0].childNodes[0].nodeValue;
        cardContent.getElementsByClassName("filmSysnopsis")[0].innerHTML= synopsis;


    }

</script>

<?php
include "./Ressources/footer.php";
?>
