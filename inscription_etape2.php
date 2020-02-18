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
                <form action="#">
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
                    <a href="inscription_etape2.php" class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
                        <i class="material-icons right">send</i>
                    </a>
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
