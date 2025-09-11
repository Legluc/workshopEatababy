<?php
require_once __DIR__ . '/../config.php';   // fais une copie de config.sample.php -> config.php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';
?>

<section class="menu-titre">
    <h1>notre carte</h1>
</section>

<section>
    <div class="menu-container">
        <div class="menu-box">
            <img id="noeud-menu" src="/public/assets/img/noeud-papillon-3d.png" alt="noeud papillon">

            <h2>nos plats</h2>
            <hr>
            <!-- baby and fries -->
            <div class="item">
                <img src="/public/assets/img/frite-boisson-2.png" alt="Baby and Fries" class="item-img">
                <div class="item-text">
                    <h4>Baby and Fries</h4>
                    <p>frites croustillantes, steak de bébé</p>
                </div>
                <div class="item-price">15 €</div>
            </div>

            <!-- Chick'n Child Tacos -->
            <div class="item">
                <img src="/public/assets/img/mexicain.png" alt="Chick'n Child Tacos" class="item-img">

                <div class="item-text">
                    <h4>Chick'n Child Tacos</h4>
                    <p>tacos au poulet et à la viande de bébé, avocat, salsa rouge, fromage, oignons, citron vert, crème mexicaine</p>
                </div>
                <div class="item-price">15 €</div>
            </div>

            <!-- Human Ramen -->
            <div class="item">
                <img src="/public/assets/img/japonais.png" alt="Human Ramen" class="item-img">

                <div class="item-text">
                    <h4>Human Ramen</h4>
                    <p>Nouilles de blé, viande de bébé, Œuf, Algues séchées, Oignons verts, graines de sésame</p>
                </div>
                <div class="item-price">18 €</div>
            </div>

            <!-- Baby Burger -->

            <div class="item">
                <img src="/public/assets/img/baby-burger-2.png" alt="Baby Burger" class="item-img">

                <div class="item-text">
                    <h4>Baby Burger</h4>
                    <p>pain à burger, steak de bébé, fromage, salade, tomate, oignons, frites croustillantes</p>
                </div>
                <div class="item-price">16 €</div>
            </div>

            <!-- Spaghetti alla Babygnese -->
            <div class="item">
                <img src="/public/assets/img/italienne.png" alt="Spaghetti alla Babygnese" class="item-img">

                <div class="item-text">
                    <h4>Spaghetti alla Babygnese</h4>
                    <p>spaghetti, viande de bébé hachée, sauce tomate, parmesan oignons, carottes, ail, vin rouge</p>
                </div>
                <div class="item-price">18 €</div>
            </div>

            <!-- Irish Baby Stew -->

            <div class="item">
                <img src="/public/assets/img/irlandais.png" alt="Irish Baby Stew" class="item-img">

                <div class="item-text">
                    <h4>Irish Baby Stew</h4>
                    <p>viande de bébé, pommes de terre, carottes, oignons, ail, bouillon, poirreau</p>
                </div>
                <div class="item-price">20 €</div>
            </div>

            <!-- CSC -->
            <div class="item">
                <img src="/public/assets/img/russe.png" alt="CSC" class="item-img">

                <div class="item-text">
                    <h4 class="menu-item">CSC</h4>
                    <p>viande de bébé en tartare, filets de saumon, caviarSS</p>
                </div>
                <div class="item-price">24 €</div>
            </div>

            <hr class="hr-boisson">

            <h2 class="boisson">nos boissons</h2>
            <hr class="hr-boisson">

            <h3>nos boissons alcoolisées</h3>
            <!-- BaBeer -->
            <div class="item-boisson">

                <div class="item-text">
                    <h4>BaBeer</h4>
                    <p>une bière artisanale en bouteille</p>
                </div>
                <div class="item-price">5 €</div>
            </div>

            <!-- Wine -->
            <div class="item-boisson">  
                <div class="item-text">
                    <h4>Wine</h4>
                    <p>un verre de vin rouge ou blanc</p>
                </div>
                <div class="item-price"> 10€</div>
            </div>
            <!-- Baby Champagne -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Champagne</h4>
                    <p>une coupe de champagne</p>
                </div>
                <div class="item-price">12 €</div>
            </div>

            <!-- Baby Cocktail -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Cocktail</h4>
                    <p>un cocktail maison sans alcool</p>
                </div>
                <div class="item-price">8 €</div>
            </div>
            <hr class="hr-boisson">
            <h3>nos boissons non-alcoolisées</h3>

            <!-- Baby Coffee -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Coffee</h4>
                    <p>café</p>
                </div>
                <div class="item-price">3 €</div>
            </div>
            <!-- Baby Cola -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Cola</h4>
                    <p>un soda bien frais</p>
                </div>
                <div class="item-price">2 €</div>
            </div>
            <!-- Baby Juice -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Juice</h4>
                    <p>un jus de fruit frais</p>
                </div>
                <div class="item-price">3 €</div>
            </div>
            <!-- Baby Water -->
            <div class="item-boisson">
                <div class="item-text">
                    <h4>Baby Water</h4>
                    <p>une eau minérale</p>
                </div>
                <div class="item-price">2 €</div>
            </div>

        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>