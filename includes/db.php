<?php
require_once __DIR__ . '/../config.php';

// Variables globales pour les connexions
$pdo = null;
$mysqli = null;
$db_error = null;

function dbconnect() 
{
        // Si PDO est disponible, l'utiliser
    try {
        $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, 
                      DB_USER, DB_PASS, 
                      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        echo "Connexion PDO réussie.";
    } catch (PDOException $e) {
        $db_error = 'Erreur de connexion PDO: ' . $e->getMessage();
    }
    return $pdo;
}

/**
 * Récupère tous les bébés disponibles depuis la base de données
 * @return array Liste des bébés
 */
function getAllBebes() {
    global $pdo, $mysqli, $db_error;
    
    // Si PDO est disponible
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM bebe");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des bébés : " . $e->getMessage();
            return [];
        }
    } 
    // Si MySQLi est disponible
    else if ($mysqli) {
        try {
            $result = $mysqli->query("SELECT * FROM bebe");
            $bebes = [];
            while ($row = $result->fetch_assoc()) {
                $bebes[] = $row;
            }
            return $bebes;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des bébés : " . $e->getMessage();
            return [];
        }
    } 
    // Si aucune connexion n'est disponible
    else {
        echo "Impossible de se connecter à la base de données: " . $db_error;
        return [];
    }
}

/**
 * Récupère tous les ingrédients disponibles depuis la base de données
 * @return array Liste des ingrédients
 */
function getAllIngredients() {
    global $pdo, $mysqli, $db_error;
    
    // Si PDO est disponible
    if ($pdo) {
        try {
            $stmt = $pdo->query("SELECT * FROM ingredients");
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
            return [];
        }
    } 
    // Si MySQLi est disponible
    else if ($mysqli) {
        try {
            $result = $mysqli->query("SELECT * FROM ingredients");
            $ingredients = [];
            while ($row = $result->fetch_assoc()) {
                $ingredients[] = $row;
            }
            return $ingredients;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des ingrédients : " . $e->getMessage();
            return [];
        }
    } 
    // Si aucune connexion n'est disponible
    else {
        echo "Impossible de se connecter à la base de données: " . $db_error;
        return [];
    }
}

/**
 * Enregistre une commande de bébé avec ses ingrédients
 * @param int $id_table Numéro de la table
 * @param int $id_bebe ID du bébé choisi
 * @param array $ingredients_ids IDs des ingrédients choisis
 * @return bool Succès ou échec de l'opération
 */
function saveBebe($id_table, $id_bebe, $ingredients_ids) {
    global $pdo, $mysqli, $db_error;
    
    // Si PDO est disponible
    if ($pdo) {
        try {
            $pdo->beginTransaction();
            
            // Vérifier si le bébé existe
            $stmt = $pdo->prepare("SELECT * FROM bebe WHERE id_bebe = ?");
            $stmt->execute([$id_bebe]);
            $bebe_info = $stmt->fetch();
            
            if (!$bebe_info) {
                throw new Exception("Bébé non trouvé");
            }
            
            // Créer une association entre le bébé et les ingrédients
            foreach ($ingredients_ids as $ingredient_id) {
                $stmt = $pdo->prepare("INSERT INTO bebe_ingredients (id_bebe, id_ingredient) VALUES (?, ?)");
                $stmt->execute([$id_bebe, $ingredient_id]);
            }
            
            // Mettre à jour le statut de la table
            $stmt = $pdo->prepare("UPDATE tables_restaurant SET statut = 'réservée' WHERE numero_table = ?");
            $stmt->execute([$id_table]);
            
            $pdo->commit();
            return true;
            
        } catch (Exception $e) {
            $pdo->rollBack();
            echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
            return false;
        }
    } 
    // Si MySQLi est disponible
    else if ($mysqli) {
        try {
            $mysqli->begin_transaction();
            
            // Vérifier si le bébé existe
            $stmt = $mysqli->prepare("SELECT * FROM bebe WHERE id_bebe = ?");
            $stmt->bind_param("i", $id_bebe);
            $stmt->execute();
            $result = $stmt->get_result();
            $bebe_info = $result->fetch_assoc();
            
            if (!$bebe_info) {
                throw new Exception("Bébé non trouvé");
            }
            
            // Créer une association entre le bébé et les ingrédients
            foreach ($ingredients_ids as $ingredient_id) {
                $stmt = $mysqli->prepare("INSERT INTO bebe_ingredients (id_bebe, id_ingredient) VALUES (?, ?)");
                $stmt->bind_param("ii", $id_bebe, $ingredient_id);
                $stmt->execute();
            }
            
            // Mettre à jour le statut de la table
            $stmt = $mysqli->prepare("UPDATE tables_restaurant SET statut = 'réservée' WHERE numero_table = ?");
            $stmt->bind_param("i", $id_table);
            $stmt->execute();
            
            $mysqli->commit();
            return true;
            
        } catch (Exception $e) {
            $mysqli->rollback();
            echo "Erreur lors de l'enregistrement de la commande : " . $e->getMessage();
            return false;
        }
    } 
    // Si aucune connexion n'est disponible
    else {
        echo "Impossible de se connecter à la base de données: " . $db_error;
        return false;
    }
}
?>