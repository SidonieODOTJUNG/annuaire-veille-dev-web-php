<?php
    require_once 'articles.php';

?>

<section>
        <h1>Liste des articles</h1>
        <div>
            <h2>Le marché de l'emploi pour les dev</h2>
            <ul class="liste">
                <?php
                    foreach ($listemploi as $article) {
                        echo "<li>"."<a href=".$article['lien']." class=\"lienArt\">".$article['titre']."</a>"."</li>";
                    }
                ?>
            </ul>    
        </div>
        
        <div>
            <h2>Les innovations et le développement web</h2>
            <ul class="liste">
                <?php
                    foreach ($listinnov as $article) {
                        echo "<li>"."<a href=".$article['lien']." class=\"lienArt\">".$article['titre']."</a>"."</li>";
                    }    
                ?>
            </ul>
        </div>

        <div>
            <h2>Les actus outils du développement web</h2>
            <ul class="liste">
                <?php
                    foreach ($listTechDev as $article) {
                        echo "<li>"."<a href=".$article['lien']." class=\"lienArt\">".$article['titre']."</a>"."</li>";
                    }    
                ?>
            </ul>
        </div>

        <div>
            <h2>Les actus de la digitalisation RH</h2>
            <ul class="liste">
                <?php
                    foreach ($listTechRH as $article) {
                        echo "<li>"."<a href=".$article['lien']." class=\"lienArt\">".$article['titre']."</a>"."</li>";
                    }    
                ?>
            </ul> 
        </div>

    </section>



