<?php
// En-tête commun à toutes les pages du site.
// Détermine automatiquement le chemin racine selon l'emplacement de la page courante.
$basePath = (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? '..' : '.';

// Titre par défaut du site.
// Il peut être remplacé plus tard si besoin dans chaque page.
$pageTitle = 'Camp International des Ados';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?php echo $basePath; ?>/assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="site-header__inner">
        <a class="brand" href="<?php echo $basePath; ?>/index.php">
            <!-- Logo du site -->
            <img src="<?php echo $basePath; ?>/assets/images/logo.jpeg" alt="Logo du camp" class="brand__logo">
            <span class="brand__title">Camp International des Ados</span>
        </a>

        <nav class="site-nav" aria-label="Navigation principale">
            <a href="<?php echo $basePath; ?>/pages/concept.php">Le concept</a>
            <a href="<?php echo $basePath; ?>/pages/programme.php">Programme</a>
            <a href="<?php echo $basePath; ?>/pages/valise.php">Valise</a>
            <a href="<?php echo $basePath; ?>/pages/adresse.php">Adresse</a>
            <a href="<?php echo $basePath; ?>/pages/photos.php">Photos</a>
        </nav>
    </div>
</header>