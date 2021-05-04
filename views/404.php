<?php

$content_title = "Ressource non Trouvée | Ma Bulle de Poils, Salon de toilettage Animalier";

ob_start();?>
    <div id="main" class="main">
        <section class="section section-light">
            <h1>Page Introuvable!</h1>
        </section>
    </div>
<?php $content_main = ob_get_clean();

include("template.php");
?>