<?php
include "./Ressources/header.php";
?>

<div class="container">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s3">
              <img src="Ressources/images/PlaceHolder.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s5">
                <p><b>Pseudo :</b>$pseudo</p>
                <p><b>Mail : </b>$mail</p>
                <p><b>Langue : </b>$langue</p>
            </div>
              <div class="col s5">
                  <a href="modifierCompte.php" class="waves-effect waves-light btn-large">Modifier</a>
                  <a href="modifierCompte.php" class="waves-effect waves-light btn-large">compte premium</a>
              </div>
          </div>
        </div>
      </div>
