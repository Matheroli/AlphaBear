<!DOCTYPE html>
<!-- Site codé par Mathéroli avec ❤
https://matheroli-mcland.000webhostapp.com Copyright 2021 tous droits réservés !

Merci à pauldb09 qui m'a aidé pour Google Analytics et mettre le site en ligne.
Certaines pages ont été réalisées grâce aux templates de https://freefrontend.com
-->
<html lang="fr" dir="ltr">
<head>
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://matheroli-mcland.000webhostapp.com/assets/bear.png">
    <meta property="og:title" content="Site Web de Matheroli">
    <meta property="og:description" content="J'avais envie de créer un site web alors j'en ai fait un.">
    <meta property="og:site_name" content="Site Web de Matheroli">
    <meta property="og:url" content="https://matheroli-mcland.000webhostapp.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaBear | Accueil</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="assets/bear1.png"/>
    <?php
    include("config/librairies.html");
    ?>
</head>
<body>
    <h1><u>Bienvenue sur mon site !!</u></h1>
    <p class="paragraphe">Pour afficher le code source faites Ctrl+U</p>
    <div>
        <div class="links">
        <div class="link">
            <a href="https://discord.gg/8HUqgnw" target="_BLANK"><img width="75" height="75" src="assets/discord.png"></a>
        </div>
        <div class="link">
            <a href="https://github.com/Matheroli/AlphaBearWebsite#readme" target="_BLANK"><img width="75" height="75" src="assets/github.png"></a>
        </div>
    </div>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1616K2DP9H"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1616K2DP9H');
    </script>
    <?php
    include("config/menu-nav.html")
    ?>
    <iframe src="https://fr.euronews.com/embed/timeline" scrolling="no" style="border:none; min-height:425px; width:100%; height:100%;"></iframe>
<style>
    h1, .paragraphe{color: rgb(0, 255, 213);text-align: center;}
    body{background: linear-gradient(to right, purple,green);height: 100%;}
    .link{display: inline-block;}
</style>
</body>
</html>
