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
                <div class="entete-choix">
                    <p>Les bébés</p>
                </div>
                <div class="entete-choix">
                    <p>Les accompagnements</p>
                </div>
            </div>
            <div class="menu-bebe-choix">
                <div class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-blanc.png" alt="bébé caucasien">
                </div>
                <div class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-japonaise.png" alt="bébé japonaise">
                </div>
                <div class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-italienne.png" alt="bébé italienne">
                </div>
                <div class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-mexicain.png" alt="bébé mexicain">
                </div>                    
            </div>
            <div class="menu-accompagnement-choix">
                <div class="accompagnement-choix">
                    <img src="" alt="">
                </div>
                <div class="accompagnement-choix">
                    <img src="" alt="">
                </div>
                <div class="accompagnement-choix">
                    <img src="" alt="">
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
