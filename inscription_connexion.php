<?php
include "./Ressources/header.php"; ?>
    <div class=container>

        <div class="row">
            <form class="col s6" method="post" action="compte.php">

                <div class="card-panel grey lighten-5 z-depth-1">

                    <div class="row">
                        <div class="col s6">
                            <label for="pseudo">Pseudo</label>
                            <input name="fname" placeholder="Clapii" id="pseudo" type="text" class="validate">
                        </div>
                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input name="fmdp" id="password" type="password" class="validate">
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
                            <input name="fpseudo2" placeholder="Clapii" id="pseudo" type="text" class="validate">
                        </div>

                        <div class="col s6">
                            <label for="email">Email</label>
                            <input name="fmail" placeholder="Patrick.Dupont@clapii.com" id="email" type="email" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <label for="first_name">Prénom</label>
                            <input name="fprenom" placeholder="Patrick" id="first_name" type="text" class="validate">
                        </div>


                        <div class="col s6">
                            <label for="last_name">Nom</label>
                            <input name="fnom" placeholder="Dupont" id="last_name" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <label for="password">Mot de passe</label>
                            <input name="fmdp2" id="password" type="password" class="validate">
                        </div>
                        <div class="col s6">
                            <label for="password">Confirmation mot de passe</label>
                            <input name="fmdp3" id="comfirm-password" type="password" class="validate">
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

    </div>

