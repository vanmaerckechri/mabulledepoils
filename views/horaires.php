<?php

$content_title = "Les Heures d'Ouverture du Salon de Toilettage pour Chien";
$meta_description = "Votre salon de toilettage pour chien préféré est ouvert du mardin au samedi, de 10h à 19h.";
$og_page = "horaires.php";

ob_start();?>
    <div id="main" class="main page-horaires">
        <section class="section introduction-container">
            <div id="intro" class="image image-salon"></div>
            <div class="section-transition"></div>
            <div class="container-large">
                <h1 id="main-title" class="title-big">Les Heures d'Ouverture du Salon de Toilettage pour Chien</h1>
            </div>
        </section>
        <section class="section section-light">
            <div class="container-large">
                <div class="presentation">
                    <p id="horaires-presentation">Votre salon de toilettage pour chien situé à Wavre vous accueille sur rendez-vous du mardi au samedi de 10h à 19h.</p>
                </div>
                <div class="horaires-content">
                    <ul id="table" class="table table-animation">
                        <li id="day1" class="row">
                            <span class="row-content">
                                <span>lundi </span>
                                <span>fermé</span>
                            </span>
                        </li>
                        <li id="day2" class="row">
                            <span class="row-content">
                                <span>mardi </span>
                                <span>10h - 19h</span>
                            </span>
                        </li>
                        <li id="day3" class="row">
                            <span class="row-content">
                                <span>mercredi </span>
                                <span>10h - 19h</span>
                            </span>
                        </li>
                        <li id="day4" class="row">
                            <span class="row-content">
                                <span>jeudi </span>
                                <span>10h - 19h</span>
                            </span>
                        </li>
                        <li id="day5" class="row">
                            <span class="row-content">
                                <span>vendredi </span>
                                <span>10h - 19h</span>
                            </span>
                        </li>
                        <li id="day6" class="row">
                            <span class="row-content">
                                <span>samedi </span>
                                <span>10h - 19h</span>
                            </span>
                        </li>
                        <li id="day0" class="row">
                            <span class="row-content">
                                <span>dimanche </span>
                                <span>fermé</span>
                            </span>
                        </li>
                    </ul>
                    <div class="niche-container">
                        <div id="niche">
                            <div id="parallax-niche" class="parallax-container image circle cadre">
                                <div class="layer layer4"></div>
                                <div class="layer layer3"></div>
                                <div class="layer layer2"></div>
                                <div class="layer layer1">
                                    <img id="hours" src="/assets/images/hourHand.svg" alt="" class="aiguille">
                                    <img id="minutes" src="/assets/images/minuteHand.svg" alt="" class="aiguille">
                                    <img id="seconds" src="/assets/images/secondHand.svg" alt="" class="aiguille seconds">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="/assets/js/Clock.js"></script>
    <script src="/assets/js/Parallax.js"></script>
    <script src="/assets/js/AnimeWhenVisible.js"></script>
    <script src="/assets/js/RequestAnimationFrame.js"></script>
    <script>
        (function()
        {
            "use strict";

            var clock = new CVM.Clock(document.getElementById("hours"), document.getElementById("minutes"), document.getElementById("seconds"));

            var animeWhenVisibleHoraires_intro = new CVM.AnimeWhenVisible(window, document.getElementById("intro"),  document.getElementById("intro"), "animeWhenVisible-backgroundZoom", 0.4, true, true, false);
            var animeWhenVisibleHoraires_title = new CVM.AnimeWhenVisible(window, document.getElementById("main-title"), document.getElementById("main-title"), "animeWhenVisible-translateFromLeft", 0.4, true, true, false);
            
            var animeWhenVisibleHoraires_presentation = new CVM.AnimeWhenVisible(window, document.getElementById("horaires-presentation"), document.getElementById("horaires-presentation"), "animeWhenVisible-translateFromRight", 0.2, true, true, false);

            var animeWhenVisibleHoraires_parallaxNiche = new CVM.AnimeWhenVisible(window, document.getElementById("horaires-presentation"), document.getElementById("niche"), "animeWhenVisible-unhide", 0.2, true, true, false);

            var rowsList = table.querySelectorAll("#table .row-content");
            for (var i = rowsList.length - 1; i >= 0; i--)
            {
                new CVM.AnimeWhenVisible(window, document.getElementById("table"), rowsList[i], "animeWhenVisible-loadRowTable", 0.1, true, true, false);
            }
            var parallaxNiche = new CVM.Parallax(document.getElementById("parallax-niche"), {isMouse: true, isMouseHover: true, h_origin: 50, h_min: 40, h_max: 60, v_origin: 50, v_min: 40, v_max: 60, h_inverse: true, v_inverse: true});

            // Limit dom refresh per sec:
            var refreshDom = new CVM.RequestAnimationFrame(function()
            {
                parallaxNiche.update();
            }, 30);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>