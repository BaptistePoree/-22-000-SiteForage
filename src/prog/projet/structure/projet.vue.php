<?php

/**
 * 
 */
?>

<?php $projet = [
    'Id' => $_GET['key'],
    'Nom' => $_GET['nom'],
    'Statu' => '',
    'Lien Vue' => '',
    'Lien Git' => '',
    'Type Langage' => '',
    'Type Projet' => '',
    'Detail' => '',
] ?>

<div class="body projet">
    <div class="divTable">
        <div class="divTableBody">
            <?php foreach ($projet as $key => $value) : ?>
                <div class="divTableRow">
                    <div class="div14 divTableCell">
                        <?= $key ?>
                    </div>
                    <div class="div50 divTableCell">
                        <?php if ($key === 'Lien Vue') : ?>
                            <a class="cellLien" href="?action=ProjetId&key=<?= $projet['Id'] ?>&testAudio=1"><?= $projet['Nom'] ?></a>
                        <?php else : ?>
                            <?= $value ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>