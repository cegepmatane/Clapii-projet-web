<?php
include "./Ressources/header.php";
?>

<div class="container">
    <div class="card-panel grey lighten-5 z-depth-1">
        <div class="row valign-wrapper">
            <div class="col s3">
                <img src="Ressources/images/PlaceHolder.jpg" alt="" class="circle responsive-img">

                <div class="row">

                    <div class="col s3">
                    </div>
                        <div class="col s5">
                            <a class="btn waves-effect waves-light">Modifier</a>
                        </div>
                            <div class="col s2">
                            </div></div>
            </div>
                <form class="col s7">
                    <div class="row">
                        <div class="input-field col s7">
                            <input value="$pseudo" id="first_name2" type="text" class="validate">
                            <label class="active" for="first_name2">Pseudo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s7">
                            <input value="$mail" id="first_name" type="text" class="validate">
                            <label class="active" for="first_name">Mail</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s7">
                            <input value="$mot de passe" id="first_name" type="text" class="validate">
                            <label class="active" for="first_name">Mot de passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s7">
                            <input value="$mot de passe" id="first_name" type="text" class="validate">
                            <label class="active" for="first_name">Mot de passe</label>
                        </div>
                    </div>

                    <div class="row col s7">
                        <label>Langue</label>
                        <select class="browser-default" >
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Français</option>
                            <option value="2">Anglais</option>
                        </select>
                    </div>
                </form>
            <div class="col s2">
                <a class="waves-effect waves-light btn-large">ok</a>
            </div>
        </div>
    </div>
</div>

