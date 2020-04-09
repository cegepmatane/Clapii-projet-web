<?php
include "./Ressources/header.php"; ?>
    <div class=container>

        <div class="row">
            <form class="col s6" method="post" action="compte.php">

                <div class="card-panel grey lighten-5 z-depth-1">

                    <div class="row">
                        <div class="col s6">
                            <label for="pseudo">Pseudo</label>
                            <input name="pseudo" placeholder="Clapii" id="cpseudo" type="text" class="validate">
                        </div>
                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input name="password" id="password" type="password" class="validate">
                        </div>

                    </div>
                    <button href="compte.php" class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>



            <form class="col s6" method="post" action="inscription_etape2.php">

                <div class="card-panel grey lighten-5 z-depth-1">
                    <div class="row">
                        <div class="col s6">
                            <label for="pseudo">Pseudo</label>
                            <input name="pseudo" placeholder="Clapii" id="ipseudo" type="text" class="validate">
                        </div>

                        <div class="col s6">
                            <label for="mail">Email</label>
                            <input name="mail" placeholder="Patrick.Dupont@clapii.com" id="email" type="email" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <label for="first_name">Prénom</label>
                            <input name="prenom" placeholder="Patrick" id="first_name" type="text" class="validate">
                        </div>


                        <div class="col s6">
                            <label for="last_name">Nom</label>
                            <input name="nom" placeholder="Dupont" id="last_name" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input name="password" id="ipassword" type="password" class="validate">
                        </div>
                        <div class="col s6">
                            <label for="password">Confirmation mot de passe</label>
                            <input name="comfirm-password-" id="comfirm-password" type="password" class="validate">
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

    </div>

<script>
    // clement met ton ajax ici
</script>

