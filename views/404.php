<?php

$content_title = "Cette Page est Indisponible!";
$meta = "<meta name=\"robots\" content=\"noindex\" />";

ob_start();?>
    <div id="main" class="main">
        <section class="section section-light">
            <h1>Page Introuvable!</h1>
        </section>
    </div>
<?php $content_main = ob_get_clean();

include("template.php");
?>