<?php
require_once __DIR__ . '/../config.php';   // fais une copie de config.sample.php -> config.php
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/header.php';

?>
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Réservation</h1>

        <form action="" method="POST"></form>
            <div class="form-section">
                <h2>Informations personnelles</h2>
                
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom_client" name="nom_client" required>
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date_reservation" name="date_reservation" required>
                </div>

                <div class="form-group">
                    <label for="heure">Heure</label>
                    <input type="time" id="heure" name="heure" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" placeholder="0123456789">
                </div>

                 <div class="form-group">
                    <label for="nombre_personnes">Nombre de personnes</label>
                    <input type="number" id="nombre_personnes" name="nombre_personnes" min="1" required>
                </div>
                
            </div>
            
            <div class="form-group" style="text-align: center; margin-top: 30px;">
                <input type="submit" value="Créer mon compte">
            </div>
        </form>

    </div>
</body>
</html>
