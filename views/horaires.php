<?php

$content_title = "Horaires | Au Fil du Poil, Salon de toilettage Animalier";
$meta_description = "Les horaires du salon de toilettage animalier au Fil du Poil situé à Wavre.";
$og_page = "horaires.php";

ob_start();?>
    <div id="main" class="main page-horaires">
        <section class="section section-light">
            <div class="container-large">
                <div class="content">
                    <h1 id="horaires-title">Horaires</h1>
                    <p id="horaires-intro">Nous vous accueillons sur rendez-vous du mardi au samedi.</p>
                    <ul class="table">
                        <li id="day1">
                            <p class="row row1">
                                <span>lundi </span>
                                <span>fermé</span>
                            </p>
                        </li>
                        <li id="day2">
                            <p class="row row2">
                                <span>mardi </span>
                                <span>10h - 19h</span>
                            </p>
                        </li>
                        <li id="day3">
                            <p class="row row3">
                                <span>mercredi </span>
                                <span>10h - 19h</span>
                            </p>
                        </li>
                        <li id="day4">
                            <p class="row row4">
                                <span>jeudi </span>
                                <span>10h - 19h</span>
                            </p>
                        </li>
                        <li id="day5">
                            <p class="row row5">
                                <span>vendredi </span>
                                <span>10h - 19h</span>
                            </p>
                        </li>
                        <li id="day6">
                            <p class="row row6">
                                <span>samedi </span>
                                <span>10h - 19h</span>
                            </p>
                        </li>
                        <li id="day0">
                            <p class="row row7">
                                <span>dimanche </span>
                                <span>fermé</span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="image-container border-cut">
                    <div id="parallax-niche" class="parallax-container image circle cadre">
                        <div class="layer layer4"></div>
                        <div class="layer layer3"></div>
                        <div class="layer layer2"></div>
                        <div class="layer layer1">
                            <img id="hours" src="assets/images/hourHand.svg" alt="" class="aiguille">
                            <img id="minutes" src="assets/images/minuteHand.svg" alt="" class="aiguille">
                            <img id="seconds" src="assets/images/secondHand.svg" alt="" class="aiguille seconds">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="assets/js/Clock.js"></script>
    <script src="assets/js/Parallax.js"></script>
    <script src="assets/js/AnimeWhenVisible.js"></script>
    <script src="assets/js/RequestAnimationFrame.js"></script>
    <script>
        (function()
        {
            "use strict";

            var clock = new CVM.Clock(document.getElementById("hours"), document.getElementById("minutes"), document.getElementById("seconds"));

            setTimeout(function()
            {
                var parallaxNiche = new CVM.Parallax(document.getElementById("parallax-niche"), "mouse", {h_origin: 50, h_min: 40, h_max: 60, v_origin: 50, v_min: 40, v_max: 60, h_inverse: true, v_inverse: true});

                // Limit dom refresh per sec:
                var refreshDom = new CVM.RequestAnimationFrame(function()
                {
                    parallaxNiche.refreshDom();
                }, 30);

            }, 6000);

            var animeWhenVisibleHoraires_title = new CVM.AnimeWhenVisible(window, document.getElementById("main"), document.getElementById("horaires-title"), "animeWhenVisible-translateFromLeft", 0, true, true, false);
            var animeWhenVisibleHoraires_intro = new CVM.AnimeWhenVisible(window, document.getElementById("main"), document.getElementById("horaires-intro"), "animeWhenVisible-translateFromRight", 0, true, true, false);
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