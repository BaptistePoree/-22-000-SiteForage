<?php

/**
 * 
 */

$id = $get['testAudio'];
$test = $testTotal[0];
?>

<?php //var_export(idTable);
//echo "</br>" 
?>

<body class="fondBlindTest">
    <iframe d="player" allowfullscreen="1" allow="
        accelerometer; 
        autoplay; 
        clipboard-write; 
        encrypted-media; 
        gyroscope; 
        picture-in-picture" title="<?= $test["nom"] ?>" src="https://www.youtube.com/embed/<?= $test["lienYT"] ?>?autoplay=1&amp;disablekb=1&amp;start=<?= $test["dureeYT"] ?>&amp;origin=https%3A%2F%2Fastucesweb.fr&amp;enablejsapi=1&amp;widgetid=3" width="0" height="0" frameborder="0">
    </iframe>

    <?php
    if ($test["imageLien"] === Null || $test["imageLien"] === '') {
        $image = $test["lienYT"];
    } else {
        $image = $test["imageLien"];
    }
    ?>

    <div class="ImgTest" style="display:none;">
        <img src="https://i.ytimg.com/vi/<?= $image ?>/hqdefault.jpg" class="ImgSize">
    </div>

    <div class="styleTitre indice" style="display:none;">
        <h1 class="nom indice"><?= $test["nomTextr"]; ?></h1>
    </div>

    <div class="Test">
        <?php require_once("./prog/general/img/help/help-3.svg") ?>
    </div>

    <a class="cellLien previous" href="?action=ProjetId&key=<?= $get['key'] ?>&testAudio=<?= ($id - 1 > 0) ? $id - 1 : 1; ?>">
        <?php require_once("./prog/general/img/blindTest/previous.svg") ?>
    </a>

    <a class="cellLien next" href="?action=ProjetId&key=<?= $get['key'] ?>&testAudio=<?= $id + 1 ?>">
        <?php require_once("./prog/general/img/blindTest/next.svg") ?>
    </a>


    <div class="styleTitre titre" style="display:none;">
        <h1 class="nom"><?= $test["nom"]; ?></h1>
    </div>

    <!-- ---------------------------------------------------------------------- -->

    <span id="temps" class="none timeClock" style="display: block;">

        <span id="tpsVal timer" class="timer"></span>

    </span>

</body>