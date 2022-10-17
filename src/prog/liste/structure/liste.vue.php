<?php

/**
 * 
 */
?>
<div class="body listeProjet">
    <h3>Liste des Projets</h3>


    <div class="divGeneralTableau divTable">
        <div class="divTableHeading">
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
            <!-- <div class="scroller"> -->
            <div class="divTableBody">
                <?php foreach ($tableauProjet as $key => $valeur) : ?>
                    <?php if ($key !== 0) : ?>
                        <div class="divTableRow">
                            <div class="div5  divTableCell"> <?= $key ?> </div>
                            <div class="div70 divTableCell"> <a class="cellLien" href="?action=Projet&nom=<?=$valeur[0]?>&key=<?=$key?>"> <?= $valeur[0] ?> </a> </div>
                            <div class="div14 divTableCell"> <?= $valeur[1] ?> </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="divGeneralTableau divTable">
        <!-- <div class="blueTable outerTableFooter">
            <div class="divTableFoot">
                <div class="links">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div> -->
    </div>

</div>