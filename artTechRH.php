

    <section>
        <h1>La digitalisation des RH</h1>
        <h2>Bonnes ou mauvaises pratiques?</h2>
        <p class="intro">Les services RH et leur transition numérique. 
            Faire le point sur les lubies, la mise en place de vraies pratiques 
            efficientes, le développement RH dans le contecte de la digitalisation...
        </p>
        <?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés en JS)
            require_once 'articles.php';
        ?>

        <?php foreach($listTechRH as $index => $article) : ?>
            <article class="gris article">
                <div class="buttom">  
                    <a href="<?= $article['lienart'] ?>"><?= $article['titre'] ?></a>
                    <p class="toutpetit"><span class="gras"><?= $article['date']?></span><?= $article['site']?></p>
                </div>
                <!-- pour en savoir plus... -->
                <div>
                    <p> <span class="gras">Résumé : </span><?= substr($article['contenu'], 0, 50)?>...<a href="index.php?page=strucArtRH&art=<?= $index ?>" class="suite">Lire la suite</a></p>
                </div>
            </article>
        <?php endforeach ?>
    </section>