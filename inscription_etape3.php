<?php
include "./Ressources/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col s2">

        </div>
        <div class="col s8">

            <div class="card-panel grey lighten-5 z-depth-1">
                <form action="./Action/traitement-inscription.php" method="post">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Sélectionner une photo de profil">
                        </div>
                    </div>
                    <!--<a href="compte.php" class="btn waves-effect waves-light" type="submit" name="action">Valider
                        <i class="material-icons right">send</i>
                    </a> -->
                    <input type="hidden" name="fpseudo2" value="<?= $_POST["fpseudo2"] ?>"/>
                    <input type="hidden" name="fmail" value="<?= $_POST["fmail"] ?>"/>
                    <input type="hidden" name="fprenom" value="<?= $_POST["fprenom"] ?>"/>
                    <input type="hidden" name="fnom" value="<?= $_POST["fnom"] ?>"/>
                    <input type="hidden" name="fmdp3" value="<?= $_POST["fmdp3"] ?>"/>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Valider
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
        <div class="col s2">

        </div>

    </div>

</div>


<?php
include "./Ressources/footer.php";
?>
