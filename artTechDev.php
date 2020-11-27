

<section>
        <h1>Les technologies en lien avec le développement web</h1>
        <h2>Toute l'actu sur les techno dev web</h2>
        <p class="intro">Veille sur les mise à jours, les nouvelles tech à surveiller, les frameworks, les langages,...
            
        </p>

        <?php
            //article individuel (penser à modif pour avoir article gris, article rose... intercalés en JS)
            require_once 'articles.php';
        ?>

        <?php foreach($listTechDev as $article) : ?>
            <article class="gris article">
                <div class="buttom">  
                    <a href="<?= $article['lienart'] ?>"><?= $article['titre'] ?></a>
                    <p class="toutpetit"><span class="gras"><?= $article['date']?></span><?= $article['site']?></p>
                </div>
                <!-- pour en savoir plus... -->
                <div>
                    <!-- penser au href sur les articles soit page individuelle soit juste afficher le reste du contenu : le contnu du livre ne suffit pas car ce n'est pas une url 
                voire avec js if clique sur lien prend la valeur "$article['contenu']-->
                    <p> <span class="gras">Résumé : </span><?= substr($article['contenu'], 0, 50)?>...<a href="" class="suite">Lire la suite</a></p>
                </div>
            </article>

        <?php endforeach ?>
    </section>