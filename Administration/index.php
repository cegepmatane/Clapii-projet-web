<?php
include "../Ressources/header.php";
include "./Donnee/AchatDAO.php";
include "./Donnee/UtilisateurDAO.php";
$achats = AchatDAO::listerAchats();
?>
<h1>Vous êtes en mode admin!!!</h1>
<div class="container">
    <div class="row">

        
        <div class="col s4">
            <div class="card grey lighten-4">
                <div class="card-content brown-text text-darken-3">
                    <span class="card-title">Liste des transactions</span>
                    <ul>
                        <?php foreach ($achats as $achat):?>
                        <?php 
                            
                            $utilisateur = UtilisateurDAO::identifierUtilisateur($achat->getIdUtilisateur());
                            $pseudo = $utilisateur->getPseudo();
                            $date = $achat->getDate();
                        ?>
                            <li class="objet-achat">
                                <p><?= $pseudo ?> / <?= $date ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>

<?php
include "../Ressources/footer.php";
?>
