<?php

$content_title = "Ma Bulle de Poils, Salon de Toilettage pour Chien à Wavre";
$meta_description = "Situé à Wavre, dans la localité de Bièrges, le salon de toilettage pour chien Ma Bulle de Poils vous accueille pour des soins de qualité réalisés par une toiletteuse diplomée.";

ob_start();?>
    <div id="main" class="main page-accueil">
        <section class="section section-light salon-container">
            <div id="parallax-mousse" class="parallax-container">
                <div class="layer layer3"></div>
                <div class="layer layer2"></div>
                <div class="layer layer1"></div>
            </div>
            <div class="parallax-cover container-large">
                <div id="salon-content" class="content">
                    <h1 class="title-big">Ma Bulle de Poils, Salon de Toilettage pour Chien à Wavre</h1>
                    <p>Pour <strong>un toilettage de qualité mettant au premier plan le bien-être du chien</strong>, venez offrir un soin réalisé avec amour à votre animal de compagnie au salon de toilettage pour chien situé à Wavre, dans la localité de Bièrges.</p>
                </div>
                <div id="salon-images" class="image-container">
                    <div class="image"></div>
                </div>
            </div>
        </section>
        <section id="toiletteuse-container" class="section section-dark toiletteuse-container">
            <div id="parallax-toiletteuse-bulles" class="parallax-container parallax-bulles">
                <div class="layer layer3"></div>
                <div class="layer layer2"></div>
                <div class="layer layer1"></div>
            </div>
            <div class="bulles-masque"></div>
            <div class="parallax-cover container-large">
                <div id="toiletteuse-images" class="image-container">
                    <div class="toiletteuse-compo">
                        <div class="image circle cadre image-toiletteuse"></div>
                        <div class="image image-toque"></div>
                    </div>
                    <div class="bulldog-compo">
                        <div class="image circle cadre image-bulldog"></div>
                        <div class="image image-aureole"></div>
                    </div>
                </div>
                <div id="toiletteuse-content" class="content">
                    <h2 class="title-big">Toiletteuse Qualifiée pour votre Chien</h2>
                    <p>Géraldine Degueldre, <strong>toiletteuse et comportementaliste canin diplomée</strong>, procure des soins à votre chien quel que soit son caractère, qu'il soit de bon ou de mauvais poil.</p>
                </div>
            </div>
        </section>
        <section class="section section-light soins-container">
            <div id="parallax-soins-bulles" class="parallax-container parallax-bulles">
                <div class="layer layer3"></div>
                <div class="layer layer2"></div>
                <div class="layer layer1"></div>
            </div>
            <div class="parallax-cover container-large">
                <div id="soins-content" class="content">
                    <h2 class="title-big">Un Toilettage sur Mesure</h2>
                    <p>Entretien des dents et des griffres, shampoing, coupe, tonte, brossage, ... <strong>tous les soins sont pratiqués avec douceur</strong> et une attention particulière est accordée aux besoins de votre chien.
                    </p>
                </div>
                <div id="soins-images" class="image-container">
                    <div class="image image-ugly circle cadre">
                        <div id="image-pretty" class="image image-pretty"></div>
                    </div>
                    <div class="slidecontainer">
                        <input type="range" min="0" max="100" value="50" class="slide-compare" id="slide-compare">
                        <label for="slide-compare" class="legend">
                            <span>avant</span>
                            <span>après</span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $content_main = ob_get_clean();

ob_start();?>
    <script src="/assets/js/AnimeWhenVisible.js"></script>
    <script src="/assets/js/Parallax.js"></script>
    <script src="/assets/js/SlideToAction.js"></script>
    <script src="/assets/js/RequestAnimationFrame.js"></script>
    <script>
        (function()
        {
            "use strict";
            var isMobile = function()
            {
                return (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) return true;})(navigator.userAgent||navigator.vendor||window.opera);
            };

            // Salon
            var animeWhenVisibleSalon_content = new CVM.AnimeWhenVisible(window, document.getElementById("salon-content"), document.getElementById("salon-content"), "animeWhenVisible-translateFromLeft", 0.25, true, true, true);
            var animeWhenVisibleSalon_images = new CVM.AnimeWhenVisible(window, document.getElementById("salon-images"), document.getElementById("salon-images"), "animeWhenVisible-unhide", 0.25, true, true, true);
            var parallaxSalonMousse = new CVM.Parallax(document.getElementById("parallax-mousse"), {h_origin: 50, h_fixed: 50, v_origin: 75, v_min: 75, v_max: 150});

            // Toiletteuse
            var animeWhenVisibleToiletteuse_content = new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-content"), document.getElementById("toiletteuse-content"), "animeWhenVisible-translateFromRight", 0.1, true, true, true);
            var animeWhenVisibleToiletteuse_images = new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-images"), document.getElementById("toiletteuse-images"), "animeWhenVisible-unhide", 0.3, true, true, true);
            var animeWhenVisibleToiletteuse_bulles;
            var parallaxToiletteuse_bulles;

            // Soins
            var animeWhenVisibleSoins_content = new CVM.AnimeWhenVisible(window, document.getElementById("soins-content"), document.getElementById("soins-content"), "animeWhenVisible-translateFromLeft", 0.25, true, true, true);
            var animeWhenVisibleSoins_images = new CVM.AnimeWhenVisible(window, document.getElementById("soins-images"), document.getElementById("soins-images"), "animeWhenVisible-unhide", 0.25, true, true, true);
            var parallaxSoins_bulles;

            var compareBeforeAfter = new CVM.SlideToAction(document.getElementById("image-pretty"), document.getElementById("slide-compare"), 50, 50, "width");
            var animeWhenVisibleSoins_compareBeforeAfter = new CVM.AnimeWhenVisible(window, document.getElementById("soins-images"), document.getElementById("soins-images"), compareBeforeAfter.startDemo.bind(compareBeforeAfter), 0.25, true, true, true);

            // Sur mobile, activer uniquement le parallax de la section "salon".
            var parallaxList;
            if (isMobile() === true)
            {
                parallaxList = [parallaxSalonMousse];
            }
            else
            {
                // Toiletteuse
                var toiletteuseBullesLayersList = document.querySelectorAll("#parallax-toiletteuse-bulles .layer");
                for (var i = toiletteuseBullesLayersList.length - 1; i >= 0; i--)
                {
                    new CVM.AnimeWhenVisible(window, document.getElementById("toiletteuse-container"), toiletteuseBullesLayersList[i], "animeWhenVisible-translateFromBot", 0.4, true, true, true);
                }
                parallaxToiletteuse_bulles = new CVM.Parallax(document.getElementById("parallax-toiletteuse-bulles"), {isMouse: true, h_origin: 50, v_origin: 50, h_min: 40, v_min: 40, h_max: 60, v_max: 60, h_inverse: true, v_inverse: true});
                
                // Soins
                parallaxSoins_bulles = new CVM.Parallax(document.getElementById("parallax-soins-bulles"), {h_origin: 50, h_fixed: 50, v_origin: 50, v_min: -100, v_max: 50});

                parallaxList = [parallaxSalonMousse, parallaxToiletteuse_bulles, parallaxSoins_bulles];
            }

            // Limiter les fps des différents parallax:
            var refreshDom = new CVM.RequestAnimationFrame(function()
            {
                for (var i = parallaxList.length - 1; i >= 0; i--)
                {
                    parallaxList[i].update();
                }
            }, 15);
        }());
    </script>
<?php $content_jsClasses = ob_get_clean();?>

<?php include("template.php"); ?>