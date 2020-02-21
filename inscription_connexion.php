<?php
include "./Ressources/header.php"; ?>
    <div class=container>

        <div class="row">
            <form class="col s6" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

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
                        <input type="submit">

                        <a href="compte.php" class="btn waves-effect waves-light" type="submit" name="action">Se
                            connecter
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


                    <a href="inscription_etape2.php" class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
                        <i class="material-icons right">send</i>
                    </a>
                </div>
            </form>
        </div>

    </div>

<?php
include "./Ressources/footer.php";
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name."<br>";
    }
    $mdp = $_POST['fmdp'];
    if (empty($mdp)) {
        echo "Name is empty";
    } else {
        echo $mdp;
    }
}?>
