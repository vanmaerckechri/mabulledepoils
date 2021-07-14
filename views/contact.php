<?php

$content_title = "Joindre la Toiletteuse et Plan d'accès au Salon de Toilettage pour Chien situé à Wavre";
$meta_description = "Les coordonnées de Géraldine Degueldre ainsi que le plan d'accès pour se rendre au salon de toilettage pour chien situé dans un cadre agréable à Wavre dans la localité de Bièrges.";
$og_page = "contact.php";

ob_start();?>
    <div id="main" class="main page-contact">
        <section class="section introduction-container">
            <div id="intro" class="image image-facade"></div>
            <div class="section-transition"></div>
            <div class="container-large">
                <h1 id="main-title" class="title-big">Joindre la Toiletteuse et Plan d'accès au Salon de Toilettage pour Chien situé à Wavre</h1>
            </div>
        </section>
        <section class="section section-light presentation-container">
            <div id="presentation-container" class="container-large">
                <div class="presentation-content">
                    <div id="presentation-content" class="text-container">
                        <p>Situé dans un <strong>quartier calme et vert</strong> face à l'église de Saint-Pierre et Marcelin dans la localité de Bièrges à Wavre, venez faire profiter votre animal de compagnie d'<strong>un toilettage de qualité dans un cadre agréable</strong></p>
                        <p>Voici les coordonnées du salon de toilettage pour chien préféré de votre chien, n'hésitez pas à me joindre par téléphone ou par mail.</p>
                    </div>
                    <ul id="contact-infos" class="table-animation">
                        <li class="row">
                            <a class="row-content" href="https://goo.gl/maps/AcTj9eUGqGkpvPVh6" target="_blank" rel="noopener">
                                <span class="image image-adresse"></span>
                                <span>Rue du Poilu 17, 1301 Wavre</span>
                            </a>
                        </li>
                        <li class="row">
                            <a class="row-content" href="tel:+32479084278">
                                <span class="image image-phone"></span>
                                <span>0479/ 08 42 78</span>
                            </a>
                        </li>
                        <li class="row">
                            <a class="row-content" href="mailto:aufildupoil@one.com">
                                <span class="image image-mail"></span>
                                <span>geraldine.degueldre@live.be</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <video src="/assets/videos/facade.mp4" autoplay muted type="video/mp4" id="video" class="video cadre"></video>
            </div>
            <div class="container-large">
                <div id="map-container" class="map-container">
                    <div id="map" class="cadre">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.4429838115634!2d4.587917115887583!3d50.71172037638512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d6e6f27220b%3A0x346259fc16f317af!2sMa%20Bulle%20de%20Poils!5e0!3m2!1sfr!2sbe!4v1625526600236!5m2!1sfr!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" title="google map"></iframe>
                    </div>
                    <div id="chat" class="image image-chat"></div>
                    <div id="chiens" class="image image-chiens"></div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="/assets/js/AnimeWhenVisible.js"></script>
    <script>
        (function()
        {
            "use strict";

            var video = document.getElementById("video");
            var isVideoEnable = null;
            var launchVideo = function(isResetVideo)
            {   
                if (isResetVideo === true)
                {
                    isVideoEnable = isResetVideo;
                    video.currentTime = 0;
                    return;
                }

                // ne pas continuer si la lecture est occupée d'être jouée ou si elle est désactivée
                if (isVideoEnable === false || video.currentTime > 0)
                {
                    return;
                }
                isVideoEnable = false;
                video.currentTime = 0;
                video.play();
            }
            video.addEventListener("loadedmetadata", function()
            {
                var animeWhenVisibleContact_video1 = new CVM.AnimeWhenVisible(window, document.getElementById("video"), document.getElementById("video"), launchVideo.bind(this), 0.1, true, true, true);
                var animeWhenVisibleContact_video2 = new CVM.AnimeWhenVisible(window, document.getElementById("presentation-container"),  document.getElementById("video"), "animeWhenVisible-rescale", 0.4, true, true, false);
            });

            var animeWhenVisibleContact_intro = new CVM.AnimeWhenVisible(window, document.getElementById("intro"),  document.getElementById("intro"), "animeWhenVisible-backgroundZoom", 0.4, true, true, false);
            var animeWhenVisibleContact_title = new CVM.AnimeWhenVisible(window, document.getElementById("main-title"), document.getElementById("main-title"), "animeWhenVisible-translateFromLeft", 0.4, true, true, false);
            
            var animeWhenVisibleContact_content = new CVM.AnimeWhenVisible(window, document.getElementById("presentation-container"),  document.getElementById("presentation-content"), "animeWhenVisible-translateFromLeft", 0.4, true, true, false);
            var rowsList = document.querySelectorAll("#contact-infos .row-content");
            for (var i = rowsList.length - 1; i >= 0; i--)
            {
                new CVM.AnimeWhenVisible(window, document.getElementById("presentation-container"), rowsList[i], "animeWhenVisible-loadRowTable", 0.1, true, true, false);
            }

            var animeWhenVisibleContact_map = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("map"), "animeWhenVisible-translateFromRight", 0.4, true, true, false);
            var animeWhenVisibleContact_chat = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("chat"), "animeWhenVisible-unhide", 0.4, true, true, false);
            var animeWhenVisibleContact_chiens = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("chiens"), "animeWhenVisible-translateFromBot", 0.6, true, true, false);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>