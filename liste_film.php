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
                            <div id="simple<?= $films[$i]->getId(); ?>" class="card" style="visibility: visible">
                                <div class="card-image">
                                    <img class="" src="./Ressources/Images/PlaceHolder.jpg">
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
            mouseOver(item.id);
            document.getElementById(item.id).className = "card horizontal m4";
        };

        item.onmouseout = function () {
            mouseOut(item.id);
            document.getElementById(item.id).className = "card";
        };
    }

    function mouseOver(id) {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var filmXML = this.responseText;
                console.log(filmXML);

                afficherFilmDetail(filmXML);
            }
        };
        xhttp.open("GET", "Action/recuperer-details-film.php?idFilm=" + id, true);
        xhttp.send();

        console.log("over sur " + id);

    }

    function mouseOut(id) {
        console.log("out");

    }

    function afficherFilmDetail(filmXML) {

        parser = new DOMParser();
        xmlDoc = parser.parseFromString(filmXML, "text/xml");

        var titre = xmlDoc.getElementsByTagName("titre")[0].childNodes[0].nodeValue;
        var date = xmlDoc.getElementsByTagName("date")[0].childNodes[0].nodeValue;
        var synopsis = xmlDoc.getElementsByTagName("synopsis")[0].childNodes[0].nodeValue;
        var id = xmlDoc.getElementsByTagName("film")[0].id;


    }

</script>

<?php
include "./Ressources/footer.php";
?>
