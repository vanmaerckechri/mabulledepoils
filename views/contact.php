<?php

$content_title = "Contact | Ma Bulle de Poils, Salon de Toilettage Canin";
$meta_description = "Les coordonnées pour contacter le salon de toilettage canin Ma Bulle de Poils situé à Wavre.";
$og_page = "contact.php";

ob_start();?>
    <div id="main" class="main page-contact">
        <section class="section introduction-container">
            <div id="intro" class="image image-facade"></div>
            <div class="section-transition"></div>
            <div class="container-large">
                <h1 id="main-title" class="title-big">Contact</h1>
            </div>
        </section>
        <section class="section section-light">
            <div id="content" class="container-large">
                <ul id="contact-content">
                    <li class="icon-container">
                        <span class="image image-adresse"></span>
                        <p>Rue du Poilu, 17 - 1301 Bièrges</p>
                    </li>
                    <li>
                        <a class="icon-container" href="tel:+32479084278">
                            <span class="image image-phone"></span>
                            <p>0479/ 08 42 78</p>
                        </a>
                    </li>
                    <li>
                        <a class="icon-container" href="mailto:aufildupoil@one.com">
                            <span class="image image-mail"></span>
                            <p>geraldine.degueldre@live.be</p>
                        </a>
                    </li>
                </ul>
                <video src="assets/videos/facade.mp4" autoplay muted type="video/mp4" id="video" class="video cadre"></video>
            </div>
            <div class="container-large">
                <div id="map-container" class="map-container">
                    <div id="map" class="cadre">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.4431668885554!2d4.587917116063354!3d50.71171697951219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d805328dce5%3A0x42489bf07705844!2sRue%20du%20Poilu%2017%2C%201301%20Wavre!5e0!3m2!1sfr!2sbe!4v1614025224671!5m2!1sfr!2sbe" width="100%" height="100%" allowfullscreen="" loading="lazy" title="google map"></iframe>
                    </div>
                    <div id="chat" class="image image-chat"></div>
                    <div id="chiens" class="image image-chiens"></div>
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
                var animeWhenVisibleContact_video2 = new CVM.AnimeWhenVisible(window, document.getElementById("content"),  document.getElementById("video"), "animeWhenVisible-rescale", 0.4, true, true, false);
            });
            var animeWhenVisibleContact_intro = new CVM.AnimeWhenVisible(window, document.getElementById("intro"),  document.getElementById("intro"), "animeWhenVisible-backgroundZoom", 0.4, true, true, false);

            var animeWhenVisibleContact_title = new CVM.AnimeWhenVisible(window, document.getElementById("main-title"), document.getElementById("main-title"), "animeWhenVisible-translateFromLeft", 0.4, true, true, false);
            var animeWhenVisibleContact_content = new CVM.AnimeWhenVisible(window, document.getElementById("content"),  document.getElementById("contact-content"), "animeWhenVisible-unhide", 0.4, true, true, false);
            
            var animeWhenVisibleContact_map = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("map"), "animeWhenVisible-translateFromRight", 0.4, true, true, false);
            var animeWhenVisibleContact_chat = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("chat"), "animeWhenVisible-unhide", 0.4, true, true, false);
            var animeWhenVisibleContact_chiens = new CVM.AnimeWhenVisible(window, document.getElementById("map-container"),  document.getElementById("chiens"), "animeWhenVisible-translateFromBot", 0.6, true, true, false);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>