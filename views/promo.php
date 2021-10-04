<?php

$content_title = "Cadeau de Bienvenue pour un Premier Toilettage";
$meta_description = "Ma Bulle de Poils, offre un cadeau de bienvenue à votre chien pour un premier toilettage.";
$meta = "<meta name=\"robots\" content=\"noindex\" />";

ob_start();?>
  <div id="main" class="main page-promo page-accueil">
        <section class="section section-light">
            <div class="image image-bulles"></div>
            <div class="image image-bulles image-bulles02"></div>
            <div class="image image-mousse image-mousse02"></div>
            <div class="image image-bulles image-bulles03"></div>
            <div class="image image-bulles image-bulles04"></div>
            <div class="image image-mousse"></div>
            <div class="container-large">
                <div class="content">
                    <h1 class="title-big">Cadeau de Bienvenue</h1>
                    <p>Pour un <strong>premier toilettage</strong>, votre boule de poils se verra offrir une magic box remplie de <strong>friandises et d’un jouet</strong>. N’attendez plus, faites profiter votre compagnon d’un <strong>toilettage professionnels à des prix accessibles</strong>.</p>
                </div>
                <div class="image-container">
                    <div class="image image-magicBox"></div>
                    <div class="image image-magicBoxCache"></div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

include("template.php");
?>