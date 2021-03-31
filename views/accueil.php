<?php

$content_title = "Accueil | Au Fil du Poil, Salon de toilettage Animalier";
$meta_description = "Présentation du salon de toilettage animalier au Fil du Poil situé à Wavre.";

ob_start();?>
    <div id="main" class="main page-accueil">
        <section class="section section-light salon-container">
            <div id="parallax-mousse" class="parallax-container">
                <img src="assets/images/mousse03.svg" alt="illustration de mousse au troisième plan" class="layer layer-mousse3">
                <img src="assets/images/mousse02.svg" alt="illustration de mousse au deuxième plan" class="layer layer-mousse2">
                <img src="assets/images/mousse01.svg" alt="illustration de mousse au premier plan" class="layer">
            </div>
            <div class="parallax-cover container-large">
                <div id="salon-content" class="content">
                    <h1>Salon de Toilettage Animalier,<br>
                        au Fil du Poil
                    </h1>
                    <p>Que vous soyez un chien, un chat ou toute autre petite boule de poils,<br>
                        venez vous faire cajoler dans votre salon de toilettage inclusif situé à Wavre.
                    </p>
                </div>
                <div id="salon-images" class="image-container">
                    <img src="assets/images/logo_02.svg" width="320" height="300" alt="logo du salon de toilettage illustrant un chiot prenant un bain">
                </div>
            </div>
        </section>
        <section id="toiletteuse-container" class="section section-dark toiletteuse-container">
            <div id="parallax-toiletteuse-bulles" class="parallax-container parallax-bulles">
                <img src="assets/images/bulles01_03.svg" alt="illustration de bulles au troisième plan" class="layer layer-bulles3">
                <img src="assets/images/bulles01_02.svg" alt="illustration de bulles au deuxième plan" class="layer layer-bulles2">
                <img src="assets/images/bulles01_01.svg" alt="illustration de bulles au premier plan" class="layer layer-bulles1">
            </div>
            <div class="bulles-masque"></div>
            <div class="parallax-cover container-large">
                <div id="toiletteuse-images" class="image-container">
                    <img src="assets/images/toiletteuse.svg" width="300" height="333" alt="dessin de la toiletteuse">
                    <img src="assets/images/chien_aureole.svg" width="320" height="255" alt="photo d'un chien auréolé" class="img-chienaureole">
                </div>
                <div id="toiletteuse-content" class="content">
                    <h2>Géraldine Degueldre,</h2>
                    <p>toiletteuse animalier et comportementaliste canin diplomée<br>
                        accueille tous vos compagnons quel que soit leur caractère.
                    </p>
                </div>
            </div>
        </section>
        <section class="section section-light soins-container">
            <div id="parallax-soins-bulles" class="parallax-container parallax-bulles">
                <img src="assets/images/bulles02_03.svg" alt="illustration de bulles au troisième plan" class="layer layer-bulles3">
                <img src="assets/images/bulles02_02.svg" alt="illustration de bulles au deuxième plan" class="layer layer-bulles2">
                <img src="assets/images/bulles02_01.svg" alt="illustration de bulles au premier plan" class="layer layer-bulles1">
            </div>
            <div class="parallax-cover container-large">
                <div id="soins-content" class="content">
                    <h2>Des Soins Adaptés</h2>
                    <p>Entretien des dents et des griffres, shampoing, coupe, tonte, brossage, ...<br>
                        tous les soins sont pratiqués avec douceur et une attention particulière<br>
                        est accordée aux besoins de l’animal.
                    </p>
                </div>
                <div id="soins-images" class="image-container">
                    <img class="cadre" src="assets/images/chiensoins.jpg" width="350" height="350" alt="photo d'un chien après qu'il ait reçu des soins">
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="assets/js/AnimeWhenVisible.js"></script>
    <script src="assets/js/Parallax.js"></script>
    <script src="assets/js/RequestAnimationFrame.js"></script>
    <script>
        (function()
        {
            "use strict";

            // Salon:
            var animeWhenVisibleSalon_content = new CVM.AnimeWhenVisible(window, document.getElementById("salon-content"), document.getElementById("salon-content"), "animeWhenVisible-translateFromLeft", 0.25, true, true, true);
            var animeWhenVisibleSalon_images = new CVM.AnimeWhenVisible(window, document.getElementById("salon-images"), document.getElementById("salon-images"), "animeWhenVisible-unhide", 0.25, true, true, true);
            var parallaxMousse = new CVM.Parallax(document.getElementById("parallax-mousse"), "scroll", {h_origin: 50, v_origin: 100, h_fixed: 50, v_max: 160});

            // Toiletteuse:
            var parallaxToiletteuse_bulles = new CVM.Parallax(document.getElementById("parallax-toiletteuse-bulles"), "mouse", {h_origin: 50, v_origin: 50, h_min: 40, v_min: 40, h_max: 60, v_max: 60, h_inverse: true, v_inverse: true});
            var animeWhenVisibleToiletteuse_bulles = new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-container"), document.getElementById("parallax-toiletteuse-bulles"), "animeWhenVisible-translateFromBot", 0.4, true, true, true);
            var animeWhenVisibleToiletteuse_content = new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-content"), document.getElementById("toiletteuse-content"), "animeWhenVisible-translateFromRight", 0.1, true, true, true);
            var animeWhenVisibleToiletteuse_images = new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-images"), document.getElementById("toiletteuse-images"), "animeWhenVisible-unhide", 0.3, true, true, true);

            // Soins:
            var parallaxSoins_bulles = new CVM.Parallax(document.getElementById("parallax-soins-bulles"), "scroll", {h_origin: 50, v_origin: 50, h_fixed: 50, v_max: 150});
            var animeWhenVisibleSoins_content = new CVM.AnimeWhenVisible(window, document.getElementById("soins-content"), document.getElementById("soins-content"), "animeWhenVisible-translateFromLeft", 0.25, true, true, true);
            var animeWhenVisibleSoins_images = new CVM.AnimeWhenVisible(window, document.getElementById("soins-images"), document.getElementById("soins-images"), "animeWhenVisible-unhide", 0.25, true, true, true);

            // Limit dom refresh per sec:
            var parallaxList = [parallaxMousse, parallaxToiletteuse_bulles, parallaxSoins_bulles];
            var refreshDom = new CVM.RequestAnimationFrame(function()
            {
                for (var i = parallaxList.length - 1; i >= 0; i--)
                {
                    parallaxList[i].refreshDom();
                }
            },10);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>