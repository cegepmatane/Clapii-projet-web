<?php
if(!isset($film['nom'])){
    $film['nom']="";
}
if(!isset($film['synopsis'])){
    $film['synopsis']="";
}
?>
<li class="collection-item avatar">
    <?php if(isset($affiche)): ?>
        <img src="<?=$affiche ?>" alt="" class="circle">
    <?php else:?>
        <i class="material-icons circle">highlight_off</i>
    <?php endif;?>
    <span class="title"><?= $film['nom'] ?></span>
    <p><?= $film['synopsis'] ?></p>
    <a href="../../film.php?film="<?= $film['nom'] ?> class="secondary-content">
        <i class="material-icons">arrow_forward</i>
    </a>
</li>
