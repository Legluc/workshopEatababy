<?php
// require_once __DIR__ . '/../config.php';

// // Variables globales pour les connexions
// $pdo = null;
// $mysqli = null;
// $db_error = null;

// function dbconnect() 
// {
//         // Si PDO est disponible, l'utiliser
//     try {
//         $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, 
//                       DB_USER, DB_PASS, 
//                       array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//         echo "Connexion PDO réussie.";
//     } catch (PDOException $e) {
//         $db_error = 'Erreur de connexion PDO: ' . $e->getMessage();
//     }
//     return $pdo;
// }


// /**
//  * Récupère tous les bébés disponibles depuis la base de données
//  * @return array Liste des bébés
//  */
// function getAllBebes() {
//     global $pdo, $db_error;
    
//     // Si PDO est disponible
//     if ($pdo) {
//         try {
//             $stmt = $pdo->query("SELECT * FROM bebe");
//             return $stmt->fetchAll();
//         } catch (PDOException $e) {
//             echo "Erreur lors de la récupération des bébés : " . $e->getMessage();
//             return [];
//         }
//     } 
// }

// /**
//  * Récupère tous les ingrédients disponibles depuis la base de données
//  * @return array Liste des ingrédients
//  */
// function getAllIngredients() {
//     global $pdo, $db_error;
    
//     // Si PDO est disponible
//     if ($pdo) {
//         try {
//             $stmt = $pdo->query("SELECT * FROM ingredients");
//             return $stmt->fetchAll();
//         } catch (PDOException $e) {
//             echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
//             return [];
//         }
//     } 
// }

// /**
//  * Enregistre une commande de bébé avec ses ingrédients
//  * @param int $id_table Numéro de la table
//  * @param int $id_bebe ID du bébé choisi
//  * @param array $ingredients_ids IDs des ingrédients choisis
//  * @return bool Succès ou échec de l'opération
//  */
// function saveBebe($id_table, $id_bebe, $ingredients_ids) {
//     global $pdo, $db_error;
    
//     // Si PDO est disponible
//     if ($pdo) {
//         try {
//             $pdo->beginTransaction();
            
//             // Vérifier si le bébé existe
//             $stmt = $pdo->prepare("SELECT * FROM bebe WHERE id_bebe = ?");
//             $stmt->execute([$id_bebe]);
//             $bebe_info = $stmt->fetch();
            
//             if (!$bebe_info) {
//                 throw new Exception("Bébé non trouvé");
//             }
            
//             // Créer une association entre le bébé et les ingrédients
//             foreach ($ingredients_ids as $ingredient_id) {
//                 $stmt = $pdo->prepare("INSERT INTO bebe_ingredients (id_bebe, id_ingredient) VALUES (?, ?)");
//                 $stmt->execute([$id_bebe, $ingredient_id]);
//             }
            
//             // Mettre à jour le statut de la table
//             $stmt = $pdo->prepare("UPDATE tables_restaurant SET statut = 'réservée' WHERE numero_table = ?");
//             $stmt->execute([$id_table]);
            
//             $pdo->commit();
//             return true;
            
//         } catch (Exception $e) {
//             $pdo->rollBack();
//             echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
//             return false;
//         }
//     } 
// }

require_once __DIR__ . '/../config.php';

// Variables globales pour les connexions
$pdo = null;
$db_error = null;

function dbconnect(): ?PDO
{
    // >>> IMPORTANT : déclarer les globales <<<
    global $pdo, $db_error;

    // Evite de recréer la connexion si elle existe déjà
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    try {
        $pdo = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET,
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ]
        );
        // ⚠️ Ne surtout pas echo ici (ça casse les réponses JSON)
        return $pdo;
    } catch (PDOException $e) {
        $db_error = 'Erreur de connexion PDO: ' . $e->getMessage();
        return null;
    }
}

/**
 * Récupère tous les bébés disponibles depuis la base de données
 * @return array Liste des bébés
 */
function getAllBebes(): array {
    $db = dbconnect();
    if (!$db) return [];
    try {
        $stmt = $db->query("SELECT id_bebe, nom_bebe, image_bebe FROM bebe ORDER BY nom_bebe");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        // En prod: log; Ici on reste discret
        return [];
    }
}

/**
 * Récupère tous les ingrédients disponibles depuis la base de données
 * @return array Liste des ingrédients
 */
function getAllIngredients(): array {
    $db = dbconnect();
    if (!$db) return [];
    try {
        $stmt = $db->query("SELECT id_ingredient, nom_ingredient, image_ingredients FROM ingredients ORDER BY nom_ingredient");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return [];
    }
}

/**
 * Enregistre une commande de bébé avec ses ingrédients
 * @param int $id_table Numéro de la table
 * @param int $id_bebe ID du bébé choisi
 * @param array $ingredients_ids IDs des ingrédients choisis
 * @return bool
 */
function saveBebe(int $id_table, int $id_bebe, array $ingredients_ids): bool {
    $db = dbconnect();
    if (!$db) return false;

    try {
        $db->beginTransaction();

        // Vérifier si le bébé existe
        $stmt = $db->prepare("SELECT 1 FROM bebe WHERE id_bebe = ?");
        $stmt->execute([$id_bebe]);
        if (!$stmt->fetch()) {
            throw new Exception("Bébé non trouvé");
        }

        // ⚠️ Ces tables doivent exister pour que ça marche.
        foreach ($ingredients_ids as $ingredient_id) {
            $stmt = $db->prepare("INSERT INTO bebe_ingredients (id_bebe, id_ingredient) VALUES (?, ?)");
            $stmt->execute([$id_bebe, $ingredient_id]);
        }

        $stmt = $db->prepare("UPDATE tables_restaurant SET statut = 'réservée' WHERE numero_table = ?");
        $stmt->execute([$id_table]);

        $db->commit();
        return true;

    } catch (Exception $e) {
        $db->rollBack();
        // En prod : log de l'erreur
        return false;
    }
}
