<?php
require_once __DIR__ . '/../config.php';   // fais une copie de config.sample.php -> config.php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

?>
<section class="hero">
    <div class="box">Hello GSAP 👋</div>
    <p>Si ce carré glisse, GSAP fonctionne.</p>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>