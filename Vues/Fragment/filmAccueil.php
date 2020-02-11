<?php
if($film->getTitre() == null){
    $film->setTitre("");
}
if($film->getSynopsis() == null){
    $film->setSynopsis("");
}
?>
<li class="collection-item avatar">
    <?php if(isset($affiche)): ?>
        <img src="<?=$affiche ?>" alt="" class="circle">
    <?php else:?>
        <i class="material-icons circle">highlight_off</i>
    <?php endif;?>
    <span class="title"><?= $film->getTitre() ?></span>
    <a href="./film.php?id=<?= $film->getId() ?>" class="secondary-content">
        <i class="material-icons">arrow_forward</i>
    </a>
</li>
