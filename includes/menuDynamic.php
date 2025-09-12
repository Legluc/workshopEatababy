<?php
require_once __DIR__ . '/../config.php';   // fais une copie de config.sample.php -> config.php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

// Récupération des données depuis la base de données
$bebes = getAllBebes();
$ingredients = getAllIngredients();

// Traitement de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_bebe']) && isset($_POST['id_ingredient']) && isset($_POST['id_table'])) {
        $id_bebe = intval($_POST['id_bebe']);
        $id_ingredient = intval($_POST['id_ingredient']);
        $id_table = intval($_POST['id_table']);
        
        // Pour le test, utilisons la table n°1
        if ($id_table === 0) {
            $id_table = 1;
        }
        
        $result = saveBebe($id_table, $id_bebe, [$id_ingredient]);
        if ($result) {
            echo '<div class="success-message">Commande enregistrée avec succès !</div>';
        } else {
            echo '<div class="error-message">Erreur lors de l\'enregistrement de la commande.</div>';
        }
    }
}
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
                <div id="bebe-blanc" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-blanc.png" alt="bébé caucasien">
                </div>
                <div id="bebe-japonaise" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-japonaise.png" alt="bébé japonaise">
                </div>
                <div id="bebe-italienne" class="bebe-choix">
                    <img  src="/public/assets/img/tete-bebe-italienne.png" alt="bébé italienne">
                </div>
                <div id="bebe-mexicain" class="bebe-choix">
                    <img  src="/public/assets/img/tete-bebe-mexicain.png" alt="bébé mexicain">
                </div>
                <div id="bebe-antillaise" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-italienne.png" alt="bébé antillaise">
                </div>
                <div id="bebe-bresilien" class="bebe-choix">
                    <img src="/public/assets/img/tete-bebe-mexicain.png" alt="bébé brésilien">
                </div>                  
            </div>
            <div class="menu-accompagnement-choix">
                <div id="bourguignon" class="accompagnement-choix">
                    <img src="/public/assets/img/bourguignon.png" alt="bourguignon">
                </div>

                <div id="risotto" class="accompagnement-choix">
                    <img src="/public/assets/img/rissotto.png" alt="risotto">
                </div>

                <div id="farofa" class="accompagnement-choix">
                    <img src="/public/assets/img/farofa.png" alt="farofa">
                </div>

                <div id="riz" class="accompagnement-choix">
                    <img src="/public/assets/img/riz.png" alt="riz">
                </div>

                <div id="chili" class="accompagnement-choix">
                    <img src="/public/assets/img/chili.png" alt="chili">
                </div>

                <div id="legume" class="accompagnement-choix">
                    <img src="/public/assets/img/legume.png" alt="legume">
                </div>

                <div id="salade" class="accompagnement-choix">
                    <img src="/public/assets/img/salade.png" alt="salade">
                </div>

                <div id="pates" class="accompagnement-choix">
                    <img src="/public/assets/img/pate.png" alt="pates">
                </div>
            </div>
            <form action="POST">
                <input type="number" placeholder="Numéro de table" min="1" max="15" required>
            </form>
            <button class="menu-validation">valider la commande</button>
        </div>
        <div class="menu-realisation">
            <form id="commande-form" method="POST" action="" style="display: none;">
                <input type="hidden" name="id_bebe" id="id_bebe" value="">
                <input type="hidden" name="id_ingredient" id="id_ingredient" value="">
                <input type="hidden" name="id_table" id="id_table" value="1">
            </form>
        </div>
    </div>
</section>

<?php 
    require_once __DIR__ . '/../includes/menu.php';
    require_once __DIR__ . '/../includes/footer.php'; 
?>
<script src="/public/assets/js/menuDynamic-new.js"></script>
