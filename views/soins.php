<?php

$content_title = "Soins | Ma Bulle de Poils, Salon de toilettage Animalier";
$meta_description = "Les soins et les tarifs du salon de toilettage animalier Ma Bulle de Poils situé à Wavre.";
$og_page = "soins.php";

ob_start();?>
    <div id="main" class="main page-soins">
        <section class="section section-light">
            <div class="container-large">
                <div class="content">
                    <h1 id="soins-title">Soins</h1>
                    <p id="soins-intro1">Les soins de base comprennent le bain, le séchage, le nettoyage des yeux et des oreilles ainsi que la tonte.</p>
                    <ul class="table">
                        <li>
                            <p class="row row1">
                                <span>petit (&lsaquo;15kg) </span>
                                <span>40€</span>
                            </p>
                        </li>
                        <li>
                            <p class="row row2">
                                <span>moyen (15-25kg) </span>
                                <span>60€</span>
                            </p>
                        </li>
                        <li>
                            <p class="row row3">
                                <span>grand (25-40kg) </span>
                                <span>75€</span>
                            </p>
                        </li>
                        <li>
                            <p class="row row4">
                                <span>géant (40-60kg) </span>
                                <span>90€</span>
                            </p>
                        </li>
                    </ul>
                    <p id="soins-intro2">Les prix suivants s’appliquent à tout type de gabarit.</p>
                    <ul class="table">
                        <li>
                            <p class="row row5">
                                <span>brossage débourage </span>
                                <span>40€/heure</span>
                            </p>
                        </li>
                        <li>
                            <p class="row row6">
                                <span>trimming ou coupe aux ciseaux </span>
                                <span>50€/heure</span>
                            </p>
                        </li>
                        <li>
                            <p class="row row7">
                                <span>coupe des ongles/griffes </span>
                                <span>5€</span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="image-container border-cut">
                    <div class="image circle cadre"></div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="assets/js/AnimeWhenVisible.js"></script>
    <script>
        (function()
        {
            "use strict";

            var animeWhenVisibleSoins_title = new CVM.AnimeWhenVisible(window, document.getElementById("main"), document.getElementById("soins-title"), "animeWhenVisible-translateFromLeft", 0.2, true, true, false);
            var animeWhenVisibleSoins_intro1 = new CVM.AnimeWhenVisible(window, document.getElementById("main"), document.getElementById("soins-intro1"), "animeWhenVisible-translateFromRight", 0.2, true, true, false);
            var animeWhenVisibleSoins_intro2 = new CVM.AnimeWhenVisible(window, document.getElementById("main"), document.getElementById("soins-intro2"), "animeWhenVisible-translateFromRight", 0.2, true, true, false);
            var rowList = document.querySelectorAll(".table .row");
            var rows = [];
            for (var i = rowList.length - 1; i >= 0; i--)
            {
                rows[i] = new CVM.AnimeWhenVisible(window, document.getElementById("main"), rowList[i], "animeWhenVisible-loadRowTable", 0, true, true, false);
            }
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>