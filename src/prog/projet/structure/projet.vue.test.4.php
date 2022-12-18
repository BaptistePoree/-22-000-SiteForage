<?php

/**
 * 
 */

// array_shift($tableauBdd);
$id = $get['testAudio'];
$test = $tableauBdd[$id];
// print_r($test);
?>

<iframe 
    id="player" 
    allowfullscreen="1" 
    allow="
        accelerometer; 
        autoplay; 
        clipboard-write; 
        encrypted-media; 
        gyroscope; 
        picture-in-picture" 
    title="<?= $test[1] ?>" 
    src="https://www.youtube.com/embed/<?= $test[2] ?>?autoplay=1&amp;disablekb=1&amp;start=<?= $test[3] ?>&amp;origin=https%3A%2F%2Fastucesweb.fr&amp;enablejsapi=1&amp;widgetid=3" 
    width="0" 
    height="0" 
    frameborder="0">
</iframe>

<div class="ImgTest" style="display:none;">
    <img src="https://i.ytimg.com/vi/<?= $test[2] ?>/hqdefault.jpg" class="ImgSize">
</div>

<div class="Test">
    <?php require_once("./prog/general/img/help/help-3.svg") ?>
</div>

<a class="cellLien previous"  href="?action=ProjetId&key=<?= $get['key'] ?>&testAudio=<?= ($id - 1 > 0) ? $id - 1 : 1; ?>" -->
    <?php require_once("./prog/general/img/blindTest/previous.svg") ?>
</a>

<a class="cellLien next"  href="?action=ProjetId&key=<?= $get['key'] ?>&testAudio=<?= $id + 1 ?>" -->
    <?php require_once("./prog/general/img/blindTest/next.svg") ?>
</a>


<div class="titre" style="display:none;">
    <h3 class="nom"><?= $test[0] . ') ' . $test[1]; ?></h3>
</div>

<!-- <div class="titre indice" style="display:none;">
<h3 class="nom indice"><?php //echo $test[5]; 
                        ?></h3>
</div> -->



<!-- ---------------------------------------------------------------------- -->

<span id="temps" class="none timeClock" style="display: block;">

    <span id="tpsVal timer" class="timer"></span>

</span>

<!-- <pre>
    <?php //print_r($testTotal); 
    ?>
</pre> -->