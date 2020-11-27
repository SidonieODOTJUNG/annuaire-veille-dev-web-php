<?php
require_once "articles.php";
$listTechDev = $listTechDev[$_GET["art"]];
?>

<p class="toutpetit"> <a href="index.php?page=pageVeille" class="toutpetit">Les thèmes</a>/<a href="index.php?page=artTechDev" class="toutpetit">Les articles</a>/ <?= $listTechDev['titre'] ?></p>

    <section class="articleInd">
        <h1><?= $listTechDev['titre'] ?></h1>
        <p class="toutpetit"><span class="gras"><?= $listTechDev['date'] ?></span> <?= $listTechDev['site'] ?></p>
        <p><span class="gras">Résumé : </span> <?= $listTechDev['contenu']?></p>
        <a href="<?= $listTechDev['lienart'] ?>" class="cliquer">Pour lire l'article, cliquer ici!</a>
    </section>