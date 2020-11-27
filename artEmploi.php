
<?php
    require_once 'articles.php';
?>
<section>
        <h1>Marché de l'emploi</h1>
        <h2>Toute l'actu emploi pour dev web </h2>
        <p class="intro">Veille sur les tech recherchées, les financements de sociétés, les recrutements,...</p>

        <?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés)

            echo "<article class=\"gris article\">";
        ?>

        <?php foreach($listemploi as $article) : ?>
            <div class="buttom">  
                <a href="<?= $article['lienart'] ?>"><?= $article['titre'] ?></a>
                <p class="toutpetit"><span class="gras"><?= $article['date']?></span><?= $article['site']?></p>
            </div>
            <!-- pour en savoir plus... -->
            <div>
                <p> <span class="gras">Résumé : </span><?= substr($article['contenu'], 0, 50)?>...<a href="index.php?page=artTransiPro" class="suite">Lire la suite</a></p>
            </div>
        <?php endforeach ?>

        <!-- <article class="gris article"> -->
            <!-- <div class="buttom">
                <a href="https://www.silicon.fr/developpeur-joker-professionnels-reconversion-351686.html#">Développeur : le joker des professionnels en transition</a>
                <p class="toutpetit"><span class="gras">18/11/2020  </span>Silicon.fr</p>
            </div> -->
            <!-- <div>
                <p><span class="gras">Résumé : </span>Analyse des débouchés professionnels suite à une reconversion en dev web...
                </p>
            </div>   -->


        <!-- </article>
        <article class="rose article">
            <div class="buttom">
                <a href="https://www.zdnet.fr/actualites/quelles-competences-javascript-sont-les-plus-recherchees-en-ce-moment-39896295.htm">Compétences JS les plus recherchées</a>
                <p class="toutpetit"><span class="gras">23/12/2019  </span>ZDNet</p>
            </div>
            <div>
                <p><span class="gras">Résumé : </span>Choix des bibliothèques et frameworks JavaScript, en fonction des offres d'emploi, en décembre 2019.
                </p>
            </div>  
        </article>
        <article class="gris article">
            <div class="buttom">
                <a href="https://www.silicon.fr/investissements-it-croissance-emea-2021-351404.html">Investissements IT : un retour à la croissance en 2021</a>
                <p class="toutpetit"><span class="gras">13/11/2020  </span>Silicon.fr</p>
            </div>
            <div>
                <p><span class="gras">Résumé : </span>Analyse des secteurs d'activité concernés par la reprise des investissements...
                </p>
            </div>  
        </article> -->
    </section>