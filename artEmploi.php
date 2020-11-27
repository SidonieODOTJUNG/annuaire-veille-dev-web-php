
<section>
        <h1>Marché de l'emploi</h1>
        <h2>Toute l'actu emploi pour dev web </h2>
        <p class="intro">Veille sur les tech recherchées, les financements de sociétés, les recrutements,...</p>

        <?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés en JS)
            require_once 'articles.php';
        ?>

        <?php foreach($listemploi as $index => $article) : ?>
            <article class="gris article">
                <div class="buttom">  
                    <a href="<?= $article['lienart'] ?>"><?= $article['titre'] ?></a>
                    <p class="toutpetit"><span class="gras"><?= $article['date']?></span><?= $article['site']?></p>
                </div>
                <!-- pour en savoir plus... -->
                <div>
                    <!-- le href="index.php?page=artTransiPro" renvoie à la page template -->
                    <p> <span class="gras">Résumé : </span><?= substr($article['contenu'], 0, 50)?>...<a href="index.php?page=strucArtPro&art=<?= $index ?>" class="suite">Lire la suite</a></p>
                </div>
            </article>
        <?php endforeach ?>
    </section>