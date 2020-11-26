<!-- tp veille techno -->

<!-- partie 1 -->

<?php
    include_once 'articles.php';
?>

<!-- 2nd partie -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP Veille techno</title>
</head>
<body>
    <header>
        <div class="header">
            <nav>
                <ul class="nav">
                    <li><a href="C:\wamp64\www\coursPHPanpep\TP\AccueilVeilletech.html">Accueil</a></li>
                    <li><a href="C:\wamp64\www\coursPHPanpep\TP\pageVeille.html">Veille</a></li>
                        <ul class="nav souscat">
                            <li><a href="C:\wamp64\www\coursPHPanpep\TP\artInnov.html">Innovation</a></li>
                            <li><a href="C:\wamp64\www\coursPHPanpep\TP\artEmploi.html">Marché de l'emploi</a></li>
                            <li><a href="C:\wamp64\www\coursPHPanpep\TP\artTechDev.html">Tech dev web</a></li>
                            <li><a href="C:\wamp64\www\coursPHPanpep\TP\artTechRH.html">Tech et RH</a></li>
                        </ul>
                    <li><a href="C:\wamp64\www\coursPHPanpep\TP\ajoutArt.html">Ajouter un article</a></li>
                </ul>
            </nav>
    
            <h1>La veille de Sido</h1>
        </div>
    </header>
    <section>
        <h1>Liste des articles</h1>
        <div>
            <h2>Le marché de l'emploi pour les dev</h2>
            <ul class="liste">
                <?php
                    foreach ($listemploi as $value) {
                        echo "<li>".$value['titre']. "</li>";
                    }
                ?>
            </ul>    
        </div>
        
        <div>
            <h2>Les innovations et le développement web</h2>
            <ul class="liste">
                <?php
                    foreach ($listinnov as $value) {
                        echo "<li>".$value['titre']. "</li>";
                    }    
                ?>
            </ul>
        </div>

        <div>
            <h2>Les actus outils du développement web</h2>
            <ul class="liste">
                <?php
                    foreach ($listTechDev as $value) {
                        echo "<li>".$value['titre']. "</li>";
                    }    
                ?>
            </ul>
        </div>

        <div>
            <h2>Les actus de la digitalisation RH</h2>
            <ul class="liste">
                <?php
                    foreach ($listTechRH as $value) {
                        echo "<li>".$value['titre']. "</li>";
                    }    
                ?>
            </ul> 
        </div>

    </section>
</body>
</html>