<?php
include "./Ressources/header.php";

var_dump($_POST);

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
                    <input type="hidden" name="pseudo" value="<?= $_POST["pseudo"] ?>"/>
                    <input type="hidden" name="mail" value="<?= $_POST["mail"] ?>"/>
                    <input type="hidden" name="prenom" value="<?= $_POST["prenom"] ?>"/>
                    <input type="hidden" name="nom" value="<?= $_POST["nom"] ?>"/>
                    <input type="hidden" name="password" value="<?= $_POST["password"] ?>"/>
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
