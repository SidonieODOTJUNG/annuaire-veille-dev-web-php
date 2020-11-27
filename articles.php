<?php

//remplace la base de donnée


//changer les liens page individuelle

$artEmp1 = [
    'titre'=> 'Développeur : le joker des professionnels en transition',
    'date'=> '18/11/2020',
    'site' => 'Silicon.fr' ,
    'lienpage' => "index.php?page=artEmploi",
    'lienart'=> 'https://www.silicon.fr/developpeur-joker-professionnels-reconversion-351686.html#',
    'contenu'=> 'Analyse des débouchés professionnels suite à une reconversion en dev web...'
];

$artEmp2 = [
    'titre'=> 'Compétences JS les plus recherchées',
    'date'=> '23/12/2019',
    'site' => 'ZDNet',
    'lienpage' => "index.php?page=artEmploi",
    'lienart'=> 'https://www.zdnet.fr/actualites/quelles-competences-javascript-sont-les-plus-recherchees-en-ce-moment-39896295.html',
    'contenu'=> 'Choix des bibliothèques et frameworks JavaScript, en fonction des offres, en décembre 2019.' 
];

$artEmp3 = [
    'titre'=>'Investissements IT : un retour à la croissance en 2021',
    'date'=> '13/11/2020',
    'site' => 'Silicon.fr' ,
    'lienpage' => "index.php?page=artEmploi",
    'lienart'=> 'https://www.silicon.fr/investissements-it-croissance-emea-2021-351404.html',
    'contenu'=> 'Analyse des secteurs IT concernés par la reprise des investissements...' 
];

$listemploi = [$artEmp1, $artEmp2, $artEmp3];


$artInnov1 = [
    'titre'=> 'Les 8 innovations du Web qui ont changé la consommation',
    'date'=> '27/08/2014',
    'site' => 'ECommerceMag.fr' ,
    'lienpage' => "index.php?page=artInnov",
    'lienart'=> 'https://www.ecommercemag.fr/Thematique/data-room-1223/Diaporamas/les-innovations-web-qui-ont-change-consommation-244724/les-places-marche-ligne-244725.html',
    'contenu'=> 'Faire le point sur les avancées technologiques qui ont changer le métier de développeur, depuis les débuts.'
];

$artInnov2 = [
    'titre'=>"Nouvelle norme de l'innovation numérique : les développeurs en première ligne",
    'date'=> '08/09/2020',
    'site' => 'Journal du net',
    'lienpage' => "index.php?page=artInnov",
    'lienart'=> 'https://www.journaldunet.com/web-tech/developpeur/1493671-nouvelle-norme-de-l-innovation-numerique-les-developpeurs-en-premiere-ligne/',
    'contenu'=> "Le télétravail devient progressivement la norme et nombreux sont les dirigeants 
    et responsables IT qui s'interrogent sur l'avenir de la transformation numérique. 
    Si la e-mutation des entreprises peut considérablement affecter le business, 
    l'expérience des développeurs de logiciels doit impérativement être transformée." 
];

$artInnov3 = [
    'titre'=>'Le filtre de confidentialité',
    'date'=> '23/04/2019',
    'site' => 'Open Web Tech' ,
    'lienpage' => "index.php?page=artInnov",
    'lienart'=> 'https://www.openwebtech.fr/pourquoi-utiliser-un-filtre-de-confidentialite/',
    'contenu'=> "Quand vous travaillez sur des données confidentielles ou sur vos données privées, 
    vous avez du mal à travailler avec l’esprit tranquille à l’extérieur. 
    En effet, une simple exposition du portable dans un lieu public suffit aux espions de récolter 
    toutes les informations nécessaires pour nuire à votre entreprise ou votre projet. 
    Heureusement, les filtres de confidentialité pour ordinateur ont mis fin à cela." 
];

$listinnov = [$artInnov1, $artInnov2, $artInnov3];


$artTechDev1 = [
    'titre'=> 'TypeScript 4.0',
    'date'=> '27/08/2020',
    'site' => 'ZDNet' ,
    'lienpage' => "index.php?page=artTechDev",
    'lienart'=> 'https://www.zdnet.fr/actualites/typescript-40-de-microsoft-est-la-et-c-est-une-etape-importante-39908579.html',
    'contenu'=> "Aboutissement d'un travail d'amélioration, sur deux ans, 
    de Microsoft, basé sur les rétours des développeurs."
];

$artTechDev2 = [
    'titre'=> "Méthode agile : attention à l'absence d'expression des besoins",
    'date'=> '09/11/2020 ',
    'site' => 'Legalis',
    'lienpage' => "index.php?page=artTechDev",
    'lienart'=> 'https://www.legalis.net/actualite/methode-agile-attention-a-labsence-dexpression-des-besoins/',
    'contenu'=> "Quand la méthode agile fait perdre du temps dans la réalisation des projets..." 
];

$listTechDev = [$artTechDev1, $artTechDev2];


$artTechRH1 = [
    'titre'=> 'La gamification en entreprise',
    'date'=> '22/11/2020',
    'site' => 'The Conversation' ,
    'lienpage' => "index.php?page=artTechRH",
    'lienart'=> 'https://theconversation.com/la-gamification-en-entreprise-un-jeu-dangereux-150197?utm_medium=email&utm_campaign=La%20lettre%20de%20The%20Conversation%20France%20du%2022%20novembre%202020%20-%201791917393&utm_content=La%20lettre%20de%20The%20Conversation%20France%20du%2022%20novembre%202020%20-%201791917393+CID_b921ff4a7318077d5123a2f8efa2adb3&utm_source=campaign_monitor_fr&utm_term=gamification',
    'contenu'=> "Enquête sur l'usage de la gamification en entrerprise 
    et sur ses dérives. L'impact négatif et les solutions 
    pour éviter les dérives."
];
$artTechRH2 = [
    'titre'=> "Méthode agile : attention à l'absence d'expression des besoins",
    'date'=> '01/03/2020 ',
    'site' => 'Culture RH',
    'lienpage' => "index.php?page=artTechRH",
    'lienart'=> 'https://culture-rh.com/digitalisation-rh-definition-enjeux-attentes-exemple/',
    'contenu'=> "Enquête sur l'usage de la gamification en entrerprise 
    et sur ses dérives. L'impact négatif et les solutions 
    pour éviter les dérives." 
];

$listTechRH = [$artTechRH1, $artTechRH2];



