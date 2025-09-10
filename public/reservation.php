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
            
            <div class="form-group">
                <input type="submit" value="Créer mon compte">
            </div>
        </form>

    </div>
</body>
</html>

<?php

function ajouterReservation($bdd) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nom_client       = htmlspecialchars($_POST['nom_client']);
        $date_reservation = $_POST['date_reservation'];
        $heure            = $_POST['heure'];
        $telephone        = $_POST['telephone'];
        $nombre_personnes = (int) $_POST['nombre_personnes'];

        try {
            
            $sql = "INSERT INTO reservation (nom_client, date_reservation, heure, telephone, nombre_personnes) 
                    VALUES (:nom_client, :date_reservation, :heure, :telephone, :nombre_personnes)";

            $stmt = $bdd->prepare($sql);

            
            $stmt->execute([
                ':nom_client'       => $nom_client,
                ':date_reservation' => $date_reservation,
                ':heure'            => $heure,
                ':telephone'        => $telephone,
                ':nombre_personnes' => $nombre_personnes
            ]);

            echo "Réservation enregistrée avec succès !";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
// Connexion à la base de données
try {
    $bdd = new PDO("mysql:host=localhost;dbname=schema;charset=utf8", "root", "");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ajouterReservation($bdd);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}
?>

