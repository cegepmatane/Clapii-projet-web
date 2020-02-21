<?php
include "./Ressources/header.php";
?>

<div class="container">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s3">
              <img src="Ressources/images/PlaceHolder.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s6">
                <p><b>Pseudo :</b>$pseudo</p>
                <p><b>Mail : </b>$mail</p>
                <p><b>Langue : </b>$langue</p>
            </div>
            
              <img src="./Ressources/images/PaypalLogo.png" class="paypal col s1">

            <div class="col s3">
                <a href="modifierCompte.php" class="waves-effect waves-light btn-large">Modifier</a>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_new">

                  <input type="hidden" name="amount" value="0.01">

                  <input type="hidden" name="currency_code" value="CAD">			
                  <input type="hidden" name="business" value="TEST-PAFF@business.example.com">
                  <input type="hidden" name="item_name" value="Compte PREMIUM">

                  <input type="hidden" name="lc" value="en">
                  <!--<input type="hidden" name="no_shipping" value="1">-->
                  <input type="hidden" name="cmd" value="_xclick">

                  <input type="submit" class="waves-effect orange darken-1 btn-large" name="command" value="Passer PRO">
                  <input type="hidden" name="rm" value="2">

                  <input type="hidden" name="src" value="1">
                  <input type="hidden" name="sra" value="1">	
                  <input type="hidden" name="return" value="http://localhost/Clapii-projet-web/compte.php">
                  <input type="hidden" name="cancel_return" value="http://localhost/Clapii-projet-web/compte.php">					

                  <!--input type="hidden" name="cpp_headerback_color" value="000000"/>
                  <input type="hidden" name="cpp_headerborder_color" value="ff0000"/-->

                </form>
            </div>
          </div>
        </div>
      </div>