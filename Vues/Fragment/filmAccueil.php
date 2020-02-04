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
        <img src="<?php if(isset($affiche)): ?>" alt="" class="circle">
    <?php endif; else:?>
        <i class="material-icons circle">highlight_off</i>
    <?php
    endif;?>
    <span class="title"><?php echo $film['nom'] ?></span>
    <p><?php echo $film['synopsis'] ?></p>
    <a href="../../film.php?film="<?php echo $film['nom'] ?> class="secondary-content"><i class="material-icons">arrow_forward</i></a>
</li>
