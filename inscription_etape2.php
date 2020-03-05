<?php
include "./Ressources/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col s2">

        </div>
        <div class="col s8">

            <div class="card-panel grey lighten-5 z-depth-1">
                <label>Cochez les catégories de films que vous aimez</label>
                <form action="inscription_etape3.php" method="post">
                    <div class="row">
                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Action</span>
                            </label>
                        </div>
                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Aventure</span>
                            </label></div>

                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Comedie</span>
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Horreur</span>
                            </label>
                        </div>
                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Fantaisie</span>
                            </label>
                        </div>
                        <div class="col s4">
                            <label>
                                <input type="checkbox"/>
                                <span>Science-fiction</span>
                            </label>
                        </div>


                    </div>
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
