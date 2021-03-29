<!DOCTYPE html>
<html lang="fr">
    <head prefix="og: https://ogp.me/ns#">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?=$meta_description ?? ''?>">
        <!--Facebook and Twitter-->
        <meta property="og:locale" content="fr_FR">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://cvm.one/aufildupoil/<?=$og_page ?? ''?>">
        <meta property="og:site_name" content="Au Fil du Poil">
        <meta property="og:title" content="<?=$content_title ?? ''?>">
        <meta property="og:description" content="<?=$meta_description ?? ''?>">
        <meta property="og:image:width" content="512">
        <meta property="og:image:width" content="512">
        <meta property="og:image" content="https://cvm.one/aufildupoil/meta_social.png">
        <meta property="og:image:alt" content="logo du salon de toilettage illustrant un chiot prenant un bain">
        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!--Stylesheet-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" media="all"> 
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all">
        <title><?=$content_title ?? ''?></title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="logo-container">
                    <img src="/assets/images/logo.svg" width="56" height="56" alt="logo du salon de toilettage illustrant un chiot prenant un bain">
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
                                <a href="/">
                                    <img src="/assets/images/btn-home.svg" width="32" height="32" alt="icone représentant une petite niche">
                                    <div class="btn-text">accueil</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="/soins">
                                    <img src="/assets/images/btn-soins.svg" width="32" height="32" alt="icone représentant une paire de ciseaux">
                                    <div class="btn-text">soins</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="/horaires">
                                    <img src="/assets/images/btn-horaires.svg" width="32" height="32" alt="icone représentant une horloge">
                                    <div class="btn-text">horaires</div>
                                </a>
                            </li>
                            <li class="btn">
                                <a href="/contact">
                                    <img src="/assets/images/btn-contact.svg" width="32" height="32" alt="icone représentant un smartphone">
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
        <script src="/assets/js/Namespaces.js"></script>
        <?=$content_jsClasses ?? ''?>
    </body>
</html>