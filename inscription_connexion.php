<?php
include "./Ressources/header.php"; ?>
    <div class=container>

        <div class="row">
            <form class="col s6">

                <div class="card-panel grey lighten-5 z-depth-1">

                    <div class="row">
                        <div class="col s6">
                            <label for="pseudo">Pseudo</label>
                            <input placeholder="Clapii" id="pseudo" type="text" class="validate">
                        </div>

                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input id="password" type="password" class="validate">
                        </div>


                        <a href="compte.php"   class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                            <i class="material-icons right">send</i>
                        </a>

                    </div>
                </div>
            </form>


            <form class="col s6">

                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row">
                        <div class="col s6">
                            <label for="pseudo">Pseudo</label>
                            <input placeholder="Clapii" id="pseudo" type="text" class="validate">
                        </div>

                        <div class="col s6">
                            <label for="email">Email</label>
                            <input placeholder="Patrick.Dupont@clapii.com" id="email" type="email" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <label for="first_name">Prénom</label>
                            <input placeholder="Patrick" id="first_name" type="text" class="validate">
                        </div>


                        <div class="col s6">
                            <label for="last_name">Nom</label>
                            <input placeholder="Dupont" id="last_name" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input id="password" type="password" class="validate">
                        </div>
                        <div class="col s6">
                            <label for="password">Confirmation mot de passe</label>
                            <input id="comfirm-password" type="password" class="validate">
                        </div>
                    </div>


                    <a href="compte.php" class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
                        <i class="material-icons right">send</i>
                    </a>
                </div>
            </form>
        </div>

    </div>

<?php
include "./Ressources/footer.php";
?>