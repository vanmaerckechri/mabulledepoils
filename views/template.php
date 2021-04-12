<!DOCTYPE html>
<html lang="fr">
    <head prefix="og: https://ogp.me/ns#">
        <!--<base href="https://www.cvmdev.be/aufildupoil/">-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?=$meta_description ?? ''?>">
        <!--Facebook and Twitter-->
        <meta property="og:locale" content="fr_FR">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?=$og_page ?? ''?>">
        <meta property="og:site_name" content="Au Fil du Poil">
        <meta property="og:title" content="<?=$content_title ?? ''?>">
        <meta property="og:description" content="<?=$meta_description ?? ''?>">
        <meta property="og:image:width" content="512">
        <meta property="og:image:width" content="512">
        <meta property="og:image" content="https://www.cvmdev.be/aufildupoil/meta_social.png">
        <meta property="og:image:alt" content="logo du salon de toilettage illustrant un chiot prenant un bain">
        <!--Favison and Color-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta name="theme-color" content="#ed427e">
        <!--Stylesheet-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" media="all"> 
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all">
        <title><?=$content_title ?? ''?></title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo-container">
                    <div class="logo-image"></div>
                    <div class="logo-text">Salon de Toilettage Animalier,<br>
                        Au Fil du Poil
                    </div>
                </div>
                <nav>
                    <div class="mainMenu-container">
                        <input type="checkbox" aria-label="déplier le menu">
                        <div class="mainMenu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul>
                            <li class="btn">
                                <a href=".">
                                    <div class="image image-accueil"></div>
                                    <div class="btn-text">accueil</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="soins">
                                    <div class="image image-soins"></div>
                                    <div class="btn-text">soins</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="horaires">
                                    <div class="image image-horaires"></div>
                                    <div class="btn-text">horaires</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="contact">
                                    <div class="image image-contact"></div>
                                    <div class="btn-text">contact</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <?=$content_main ?? ''?>
        <footer></footer>
        <script src="assets/js/Namespaces.js"></script>
        <script src="assets/js/ToggleNavVisibility.js"></script>
        <script>
            (function()
            {
                "use strict";

                var toggleNavVisibility = new CVM.ToggleNavVisibility(document.getElementsByTagName("header")[0]);
            }());
        </script>
        <?=$content_jsClasses ?? ''?>
    </body>
</html>