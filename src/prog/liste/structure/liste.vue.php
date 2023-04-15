<?php

/**
 * 
 */
?>
<div class="body listeProjet">
    <h3>Liste des Projets</h3>


    <div class="divGeneralTableau divTable">
        <div class="divTableHeading textCentreCelule">
            <div class="divTableRow">
                <div class="div5 divTableCell">
                    <div class="divTableCellText">
                        <div><span>id</span></div>
                    </div>
                </div>
                <div class="div70 divTableCell">
                    <div class="divTableCellText">
                        <div><span>Nom du projet</span></div>
                    </div>
                    &nbsp;
                </div>
                <div class="div14 divTableCell">
                    <div class="divTableCellText">
                        <div><span>Status </br>(id&eacute;e, en cour, fini)</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroller">
        <div class="divGeneralTableau divTable ">
            <div class="divTableBody">
                <!-- <?php print_r($tableauProjet) ?> -->
                <?php foreach ($tableauProjet as $ligne) : ?>
                    <div class="divHaut2em divTableRow">
                        <div class="div5  divTableCell"> <?= $ligne->getId() ?> </div>
                        <div class="div70 divTableCell textCentreCelule"> <a class="cellLien" href="?action=Projet&nom=<?= $ligne->getNomProjet() ?>&key=<?= $ligne->getId() ?>"> <?= $ligne->getNomProjet() ?> </a> </div>
                        <div class="div14 divTableCell textCentreCelule"> <?= $ligne->getEtat() ?> </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="divGeneralTableau divTable">
    </div>

</div>