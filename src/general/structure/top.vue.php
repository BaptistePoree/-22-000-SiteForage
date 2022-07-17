<?php
/**
 * Ficher qui génere la base du tete de page
 */
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <?php foreach ($table['css']['listSRC'] as $value) : ?>
        <link rel="<?= $table['css']['rel'] ?>" href="<?= add_version($value) ?>" />
    <?php endforeach; ?>
    <?php foreach ($table['js']['listSCRTop'] as $value) : ?>
        <script type = "<?= $table['js']['type'] ?>"
            src = "<?= add_version($value) ?>" >
    </script>
<?php endforeach; ?>
</head>

<body>