<?php

/**
 * Ficher qui génere la base du pied de page
 */
?>

    <script src="<?= add_version('./prog/general/js/jquery-3.6.0.min.js') ?>"></script>
    <?php foreach ($this->table->getJs()['listSCRBottom'] as $value) : ?>
        <script type="<?php echo $this->table->getJs()['type'] ?>" 
            src="<?php echo $value ?>">
        </script>

    <?php endforeach; ?>


</body>

</html>