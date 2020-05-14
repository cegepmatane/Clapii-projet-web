<?php
include "./Ressources/header.php";

if (isset($_SESSION['id'])) {
    header('Location: ./index.php?');
    exit;
}

?>
<div class=container>

    <div class="row">
        <div class="col s6 ">
            <div class="card-panel grey lighten-5 z-depth-1">

                <div class="row">
                    <div class="col s6">
                        <label for="pseudo">Pseudo</label>
                        <input name="pseudo" placeholder="Clapii" id="cpseudo" type="text" class="validate">
                    </div>
                    <div class="col s6">
                        <label for="password">Mot de passe</label>
                        <input name="password" id="cpassword" type="password" class="validate">
                    </div>
                </div>

                <button class="btn waves-effect waves-light" onclick="requetteConnexion()">Se connecter
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>


        <form class="col s6" method="post" action="inscription_etape2.php">

            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row">
                    <div class="col s6">
                        <label for="pseudo">Pseudo</label>
                        <input name="pseudo" placeholder="Clapii" id="ipseudo" type="text" class="validate">
                    </div>

                    <div class="col s6">
                        <label for="mail">Email</label>
                        <input name="mail" placeholder="Patrick.Dupont@clapii.com" id="email" type="email"
                               class="validate">
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
                        <input name="comfirm-password" id="comfirm-password" type="password" class="validate">
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

    function requetteConnexion() {
        var pseudo = document.getElementById('cpseudo').value;
        var password = document.getElementById('cpassword').value;
        console.log(pseudo);
        console.log(password);

        var xhttp = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
        xhttp.open("POST", "Action/traitement-connexion.php", true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState>3 && xhttp.status==200) {
                console.log(xhttp.responseText);

            }
        };
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("pseudo="+pseudo+"&password="+password);

    }

</script>