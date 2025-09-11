<?php
require_once __DIR__ . '/../config.php';   // fais une copie de config.sample.php -> config.php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

?>
<section class="section-menu-dynamic">
    <div>
        <h1>Nos menus</h1>
        <p>Chez Eatababy, nous avons imaginé une carte qui s’adapte à toutes les envies.
            D’un côté, découvrez nos menus traditionnels, soigneusement élaborés par nos Chefs, où chaque bébé incarne la culture et le savoir-faire d’un pays. Ces menus complets sont parfaits pour ceux qui veulent se laisser guider et vivre une expérience clé en main. <br><br> De l’autre, laissez libre cours à votre imagination avec notre formule “Compose ton bébé" : choisissez d’abord votre bébé préféré (italien, japonais, mexicain, américain… et bien d’autres à venir), puis associez-le à l’accompagnement de votre choix.
        </p>
    </div>
    <div class="menu-dynamic">
        <div class="menu-choix">
            <div class="menu-entete-choix">
                <div id="menu-bebe" class="entete-choix">
                    <p>Les bébés</p>
                </div>
                <div id="menu-accompagnement" class="entete-choix">
                    <p>Les accompagnements</p>
                </div>
            </div>
            <div  class="menu-bebe-choix">
                <div id="tete-bebe-blanc" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-blanc.png" alt="bébé caucasien">
                </div>
                <div id="tete-bebe-japonaise" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-japonaise.png" alt="bébé japonaise">
                </div>
                <div id="tete-bebe-italienne" class="bebe-choix">
                    <img  src="/public/assets/img/tete-bebe-italienne.png" alt="bébé italienne">
                </div>
                <div id="tete-bebe-mexicain" class="bebe-choix">
                    <img  src="/public/assets/img/tete-bebe-mexicain.png" alt="bébé mexicain">
                </div>
                <div id="tete-bebe-antillaise" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-italienne.png" alt="bébé antillaise">
                </div>
                <div id="tete-bebe-bresilien" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-mexicain.png" alt="bébé brésilien">
                </div>                  
            </div>
            <div class="menu-accompagnement-choix">
                <div id="bourguignon" class="accompagnement-choix">
                    <img src="" alt="bourguignon">
                </div>

                <div id="risotto" class="accompagnement-choix">
                    <img src="" alt="risotto">
                </div>

                <div id="farofa" class="accompagnement-choix">
                    <img src="" alt="farofa">
                </div>

                <div id="riz" class="accompagnement-choix">
                    <img src="" alt="riz">
                </div>

                <div id="chili" class="accompagnement-choix">
                    <img src="" alt="chili">
                </div>

                <div id="legume" class="accompagnement-choix">
                    <img src="" alt="legume">
                </div>

                <div id="salade" class="accompagnement-choix">
                    <img src="" alt="salade">
                </div>

                <div id="pates" class="accompagnement-choix">
                    <img src="" alt="pates">
                </div>
            </div>
            <button class="menu-validation">valider la commande</button>
        </div>
        <div class="menu-realisation">

        </div>
    </div>
</section>

<?php 
    require_once __DIR__ . '/../includes/menu.php';
    require_once __DIR__ . '/../includes/footer.php'; 
?>
