

<section>
        <h1>Les innovations du web</h1>
        <h2>Les innovations qui changent le metier de développeur</h2>
        <p class="intro">Rester informé sur les évolutions technologiques qui changent l'approche du metier, 
            ouvrent de nouvelles spécialisations, impactent le quotidien du développeur.
        </p>

        <?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés en JS)
            require_once 'articles.php';
        ?>

<?php foreach($listinnov as $index => $article) : ?>
            <article class="gris article">
                <div class="buttom">  
                    <a href="<?= $article['lienart'] ?>"><?= $article['titre'] ?></a>
                    <p class="toutpetit"><span class="gras"><?= $article['date']?></span><?= $article['site']?></p>
                </div>
                <!-- pour en savoir plus... -->
                <div>
                    <!-- le href="index.php?page=artTransiPro" renvoie à la page template -->
                    <p> <span class="gras">Résumé : </span><?= substr($article['contenu'], 0, 50)?>...<a href="index.php?page=strucArtInnov&art=<?= $index ?>" class="suite">Lire la suite</a></p>
                </div>
            </article>
        <?php endforeach ?>
    </section>