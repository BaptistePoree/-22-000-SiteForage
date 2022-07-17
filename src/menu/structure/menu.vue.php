<?php

/**
 * Menu dans on n'est en plein ecrant par défaut.
 */
?>

<header>
    <a class="logo" href="<?= $nav['home']['src'] ?>">
        <?php require_once('./general/img/logo/Forge_Logo.svg') ?>
    </a>
    <nav>
        <ul class="nav_links">
            <?php foreach ($nav as $key => $detail) : ?>
                <li class="nav_<?= $key ?>">
                    <a href="<?= $detail['src'] ?>">
                        <div class="text_<?= $key ?>">
                            <?= $detail['titre'] ?>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <p class="menu_cta">
        Menu
    </p>
</header>

<?php
/**
 * Menu dans le cas où on n'est dans une version mobile 
 * ou compacter de la vue du site.
 */
?>

<div id="mobile_menu" class="overlay">
    <a class="close">
        &times;
    </a>
    <div class="overlay_content">
        <?php foreach ($nav as $key => $detail) : ?>
            <a href="<?= $detail['src'] ?>">
                <div class="text_<?= $key ?>">
                    <?= $detail['titre'] ?>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

