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
    <?php foreach ($this->table['css']['listSRC'] as $value) : ?>
        <link rel="<?php echo $this->table['css']['rel'] ?>" 
            href="<?php echo add_version($value) ?>" />
    <?php endforeach; ?>
    <?php foreach ($this->table['js']['listSCRTop'] as $value) : ?>
        <script type = "<?php $this->table['js']['type'] ?>"
            src = "<?php add_version($value) ?>" >
        </script>
    <?php endforeach; ?>
</head>

<body>
