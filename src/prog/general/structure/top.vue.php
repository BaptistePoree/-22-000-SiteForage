<?php

/**
 * Ficher qui génere la base du tete de page
 */
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $this->titre ?></title>
    <meta charset="utf-8">
    <?php foreach ($this->table->getCss()['Fixe']['listSRC'] as $value) : ?>
        <link rel="<?php echo $this->table->getCss()['rel'] ?>" href="<?php echo $value ?>" />
    <?php endforeach; ?>
    
    <?php foreach ($this->table->getCss()['Module']['listSRC'] as $value) : ?>
        <link rel="<?php echo $this->table->getCss()['rel'] ?>" href="<?php echo $value ?>" />
    <?php endforeach; ?>

    <?php foreach ($this->table->getJs()['listSCRTop'] as $value) : ?>
        <script type="<?php echo $this->table->getJs()['type'] ?>" 
            src="<?php echo $value ?>">
    </script>

    <?php endforeach; ?>
</head>

<body>