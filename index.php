<!-- veille techno -->

<?php

// structure de routage
if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "AccueilVeilleTech" : $pageAInclure = "AccueilVeilleTech.php";
        break;
        case "pageVeille" : $pageAInclure = "pageVeille.php";
        break;
        case "artInnov" : $pageAInclure = "artInnov.php";
        break;
        case "artEmploi" : $pageAInclure = "artEmploi.php";
        break;
        case "artTechDev" : $pageAInclure = "artTechDev.php";
        break;
        case "artTechRH" : $pageAInclure = "artTechRH.php";
        break;
        case "ajoutArt" : $pageAInclure = "ajoutArt.php";
        break;
        case "artTransiPro" : $pageAInclure = "artTransiPro.php";
        break;
        default : $pageAInclure = "AccueilVeilleTech.php";
    }
}else {
    include("AccueilVeilleTech.php");
}
?>

<!-- 2nd partie -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maquetteHTMLCSS/style.css">
    <title>TP Veille techno</title>
</head>
<body>
    <header>
        <div class="header">
            <nav>
                <ul class="nav">
                    <li><a href="index.php?page=AccueilVeilletech">Accueil</a></li>
                    <li><a href="index.php?page=pageVeille">Veille</a></li>
                        <ul class="nav souscat">
                            <li><a href="index.php?page=artInnov">Innovation</a></li>
                            <li><a href="index.php?page=artEmploi">Marché de l'emploi</a></li>
                            <li><a href="index.php?page=artTechDev">Tech dev web</a></li>
                            <li><a href="index.php?page=artTechRH">Tech et RH</a></li>
                        </ul>
                    <li><a href="index.php?page=ajoutArt">Ajouter un article</a></li>
                </ul>
            </nav>
    
            <h1>La veille de Sido</h1>
        </div>
    </header>
    <?php require_once $pageAInclure ?>
</body>
</html>