<?php
require_once "articles.php";
$listinnov = $listinnov[$_GET["art"]];
?>

<p class="toutpetit"> <a href="index.php?page=pageVeille" class="toutpetit">Les thèmes</a>/<a href="index.php?page=artInnov" class="toutpetit">Les articles</a>/ <?= $listinnov['titre'] ?></p>

    <section class="articleInd">
        <h1><?= $listinnov['titre'] ?></h1>
        <p class="toutpetit"><span class="gras"><?= $listinnov['date'] ?></span> <?= $listinnov['site'] ?></p>
        <p><span class="gras">Résumé : </span> <?= $listinnov['contenu']?></p>
        <a href="<?= $listinnov['lienart'] ?>" class="cliquer">Pour lire l'article, cliquer ici!</a>
    </section>