<?php

$content_title = "Contact | Ma Bulle de Poils, Salon de toilettage Animalier";
$meta_description = "Les coordonnées pour contacter le salon de toilettage animalier Ma Bulle de Poils situé à Wavre.";
$og_page = "contact.php";

ob_start();?>
    <div id="main" class="main page-contact">
        <section class="section section-light">
            <div class="container-large">
                <div class="content">
                    <h1 id="contact-title">Contact</h1>
                    <ul id="contact-content">
                        <li class="icon-container">
                            <div class="image image-adresse"></div>
                            <span class="text">Rue du Poilu, 17 - 1301 Bièrges</span>
                        </li>
                        <li>
                            <a class="icon-container" href="tel:010-223-344">
                                <div class="image image-phone"></div>
                                <span class="text">0479/ 08 42 78</span>
                            </a>
                        </li>
                        <li>
                            <a class="icon-container" href="mailto:aufildupoil@one.com">
                                <div class="image image-mail"></div>
                                <span class="text">geraldine.degueldre@live.be</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="image-container">
                    <div class="image image-chiens"></div>
                    <div class="image circle cadre image-facade"></div>
                    <div class="image image-chat"></div>
                </div>
                <div class="cadre map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.4431668885554!2d4.587917116063354!3d50.71171697951219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d805328dce5%3A0x42489bf07705844!2sRue%20du%20Poilu%2017%2C%201301%20Wavre!5e0!3m2!1sfr!2sbe!4v1614025224671!5m2!1sfr!2sbe" width="400" height="400" allowfullscreen="" loading="lazy" title="google map"></iframe>
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
            var animeWhenVisibleContact_title = new CVM.AnimeWhenVisible(window, document.getElementById("contact-title"), document.getElementById("contact-title"), "animeWhenVisible-translateFromLeft", 0, true, true, false);
            var animeWhenVisibleContact_content = new CVM.AnimeWhenVisible(window, document.getElementById("contact-content"), document.getElementById("contact-content"), "animeWhenVisible-translateFromRight", 0, true, true, false);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>