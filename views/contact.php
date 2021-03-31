<?php

$content_title = "Contact | Au Fil du Poil, Salon de toilettage Animalier";
$meta_description = "Les coordonnées pour contacter le salon de toilettage animalier au Fil du Poil situé à Wavre.";
$og_page = "contact.php";

ob_start();?>
    <div id="main" class="main page-contact">
        <section class="section section-light">
            <div class="container-large">
                <div class="content">
                    <h1 id="contact-title">Contact</h1>
                    <ul id="contact-content">
                        <li class="icon-container">
                            <img src="assets/images/icone_adresse.svg" width="38" height="38" alt="icone une petite maison">
                            <span class="text">Rue du Poilu, 17 - 1301 Bièrges</span>
                        </li>
                        <li>
                            <a class="icon-container" href="tel:010-223-344">
                                <img src="assets/images/icone_phone.svg" width="38" height="38" alt="icone une petite maison">
                                <span class="text">010/ 22 33 44</span>
                            </a>
                        </li>
                        <li>
                            <a class="icon-container" href="mailto:aufildupoil@one.com">
                                <img src="assets/images/icone_mail.svg" width="38" height="38" alt="icone une petite maison">
                                <span class="text">aufildupoil@one.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="image-container">
                    <div class="cadre facade-container">
                        <img src="assets/images/photo_facade.jpg" width="329" height="329" alt="photo de la facade du salon de toilettage">
                    </div>
                    <img src="assets/images/silhouette_chien01.svg" width="160" height="120" alt="silhouette d'un chien en marche" class="silhouette silhouette_chien01">
                    <img src="assets/images/silhouette_chien02.svg" width="129" height="142" alt="silhouette d'un chien assis" class="silhouette silhouette_chien02">
                    <img src="assets/images/silhouette_chien03.svg" width="168" height="95" alt="silhouette d'un chien assis" class="silhouette silhouette_chien03">
                    <img src="assets/images/silhouette_chat.svg" width="70" height="110" alt="silhouette d'un chat assis" class="silhouette silhouette_chat">
                </div>
                <div id="gm-container" class="cadre gm-container">
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