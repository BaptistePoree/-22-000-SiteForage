<?php

/**
 * 
 */
?>

<!-- <?php print_r($testTotal); ?> -->

<!-- <?php $projet = [
            'Id' => $_GET['key'],
            'Nom' => $_GET['nom'],
            'Statu' => '',
            'Lien Vue' => '',
            'Lien Git' => '',
            'Type Langage' => '',
            'Type Projet' => '',
            'Detail' => '',
        ] ?> -->

<div class="body projet">
    <div class="divTable">
        <div class="divTableBody">
            <?php $projet = $testTotal->getTable() ?>
            <?php foreach ($projet as $key => $value) : ?>
                <div class="divTableRow">
                    <div class="div14 divDroit divTableCell">
                        <?= $key ?> :
                    </div>
                    <div class="div50 divTableCell">
                        <?php if ($key === 'vue') : ?>
                            <a class="cellLien" href="?action=ProjetId&key=<?= $testTotal->getId() ?>&testAudio=0"> Vue du projet <?= $testTotal->getNomProjet() ?></a>
                            <!-- <a class="cellLien" href="?action=ProjetId&projet=<?= $testTotal->getId() ?>&testAudio=0"> Vue du projet <?= $testTotal->getNomProjet() ?></a> -->
                        <?php else : ?>
                            <?= $value ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>