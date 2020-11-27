<?php
require_once "articles.php";
$listTechRH = $listTechRH[$_GET["art"]];
?>

<p class="toutpetit"> <a href="index.php?page=pageVeille" class="toutpetit">Les thèmes</a>/<a href="index.php?page=artTechRH" class="toutpetit">Les articles</a>/ <?= $listTechRH['titre'] ?></p>

    <section class="articleInd">
        <h1><?= $listTechRH['titre'] ?></h1>
        <p class="toutpetit"><span class="gras"><?= $listTechRH['date'] ?></span> <?= $listTechRH['site'] ?></p>
        <p><span class="gras">Résumé : </span> <?= $listTechRH['contenu']?></p>
        <a href="<?= $listTechRH['lienart'] ?>" class="cliquer">Pour lire l'article, cliquer ici!</a>
    </section>