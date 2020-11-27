<?php
require_once "articles.php";
$listemploi = $listemploi[$_GET["art"]];
?>

<p class="toutpetit"> <a href="index.php?page=pageVeille" class="toutpetit">Les thèmes</a>/<a href="index.php?page=artEmploi" class="toutpetit">Les articles</a>/ <?= $listemploi['titre'] ?></p>

    <section class="articleInd">
        <h1><?= $listemploi['titre'] ?></h1>
        <p class="toutpetit"><span class="gras"><?= $listemploi['date'] ?></span> <?= $listemploi['site'] ?></p>
        <p><span class="gras">Résumé : </span> <?= $listemploi['contenu']?></p>
        <a href="<?= $listemploi['lienart'] ?>" class="cliquer">Pour lire l'article, cliquer ici!</a>
    </section>