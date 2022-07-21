<?php
/**
 * Ficher qui génere la base du pied de page
 */
?>

        <script src="<?= add_version('./prog/general/js/jquery-3.6.0.min.js') ?>"></script>
        <?php foreach ($this->table['js']['listSCRBottom'] as $value) : ?>
            <script type="<?php echo $this->table['js']['type'] ?>" 
                src="<?php echo add_version($value) ?>">

            </script>
        <?php endforeach; ?>

    </body>

</html>